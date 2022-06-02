# Pre-clean
rm -Rf generated
rm generated.zip

curl -X POST \
  https://generator3.swagger.io/api/generate \
  -H 'Content-Type: application/json' \
  -H 'cache-control: no-cache' \
  -d '{
    "options": {
      "packageName": "EmonsiteApiPhpClient",
      "apiPackage": "Api",
      "invokerPackage": "EmonsiteApi",
      "composerVendorName": "e-monsite",
      "composerProjectName": "e-monsite-api-php-client",
      "modelPackage": "Models",
      "variableNamingConvention": "camelCase",
      "packagePath": "GeneratedEmonsiteApiPhpClient",
      "gitUserId": "e-monsite",
      "gitRepoId": "e-monsite-api-php-client",
      "gitRepoBaseURL": "https://github.com/"
    },
    "lang": "php",
    "type": "CLIENT",
    "codegenVersion": "V3",
    "specURL": "https://raw.githubusercontent.com/e-monsite/e-monsite-api-php-client/main/e-monsite-oas3.json"
}' > generated.zip

unzip generated.zip -d generated/

# Remove old files
rm composer.json
rm phpunit.xml.dist
rm README.md
rm -Rf docs
rm -Rf lib
rm -Rf test

# Move file in root directory
cp -Rf generated/SwaggerClient-php/* .

# Post-clean
rm -Rf generated
rm generated.zip

# No use of git_push script, clean it
rm git_push.sh
