# Remove old files
rm -f build/*.zip

# Zip Plugin
cd src/
composer install
npm install
npm run production
zip -qr ../build/plg_system_yooalgolia.zip ./* -x node_modules/\* -x assets/src/\*

cd ../
