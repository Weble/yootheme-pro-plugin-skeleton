# SKELETON FOR BUILDING CUSTOM YOOTHEME PRO PLUGINS FOR JOOMLA 3 / 4

## Steps for using
1. Create a new GIT repo using this template
2. Clone the new repo locally
3. Rename every file containing `[PLUGIN_NAME]` with your new plugin name (example: `yooalgolia`)
4. Search and replace `[PLUGIN_NAMESPACE]` with your namespace for php (example: `YOOAlgolia`)
5. Search and replace `[PLUGIN_NAME]` with your new plugin name (example: `yooalgolia`)
6. Search and replace `[PLUGIN_TITLE]` with your new plugin title (example: `YOOalgolia`)
7. Search and replace `[PLUGIN_DESCRIPTION]` with your new plugin description (example: `Algolia elements for YOOtheme PRO`)

## Composer
Automatic support for composer in `/src`, so `cd ./src && composer install`

## NPM
Automatic support for JS files and their compilation with `cd ./src && npm install && npm run watch`

## Building
```
./build.sh
```
