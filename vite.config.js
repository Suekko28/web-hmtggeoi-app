import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs-extra";
import path from "path";

const folder = {
    src: "resources/",
    src_assets: "resources/",
    dist: "public/",
    dist_assets: "public/build/",
};

export default defineConfig({
    build: {
        manifest: true,
        outDir: folder.dist_assets,
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (asset) => {
                    return asset.name.endsWith(".css")
                        ? "css/[name].css"
                        : "icons/[name]";
                },
                entryFileNames: "js/[name].js",
            },
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),

        // Plugin: Copy Assets
        {
            name: "copy-assets",
            async writeBundle() {
                try {
                    await Promise.all([
                        fs.copy(folder.src_assets + "images", folder.dist_assets + "images"),
                        fs.copy(folder.src_assets + "fonts", folder.dist_assets + "fonts"),
                        fs.copy(folder.src_assets + "js", folder.dist_assets + "js"),
                    ]);
                } catch (error) {
                    console.error("Error copying assets:", error);
                }
            },
        },

        // Plugin: Copy Specific Libraries from node_modules
        {
            name: "copy-specific-packages",
            async writeBundle() {
                const outputPath = path.resolve(__dirname, folder.dist_assets);
                const outputPathSrc = path.resolve(__dirname, folder.src_assets);
                const configPath = path.resolve(__dirname, "package-libs-config.json");

                try {
                    const configContent = await fs.readFile(configPath, "utf-8");
                    const { packagesToCopy } = JSON.parse(configContent);

                    for (const packageName of packagesToCopy) {
                        const hasDist = fs.existsSync(
                            path.join(__dirname, "node_modules", packageName, "dist")
                        );

                        const sourcePath = hasDist
                            ? path.join(__dirname, "node_modules", packageName, "dist")
                            : path.join(__dirname, "node_modules", packageName);

                        const destDist = path.join(outputPath, "libs", packageName, hasDist ? "dist" : "");
                        const destSrc = path.join(outputPathSrc, "libs", packageName, hasDist ? "dist" : "");

                        try {
                            await fs.access(sourcePath, fs.constants.F_OK);
                            await fs.copy(sourcePath, destDist);
                            await fs.copy(sourcePath, destSrc);
                        } catch (err) {
                            console.error(`Package ${packageName} does not exist or cannot be copied.`);
                        }
                    }
                } catch (error) {
                    console.error("Error reading/copying package-libs-config.json:", error);
                }
            },
        },
    ],
});
