#!/bin/bash
# Run Codegen
java -jar swagger-codegen-cli.jar generate  -l php -i mindbody.json -c swagger-php-config.json -t swagger-templates/php

#Delete src/tests
rm -rf src/test

pushd src/Api
for i in *Api.php; do sed -i -E 's/(function\s.*\(.*?\)\s*:\s*)(.*?\[\])/\1array/gm' $i; done
popd

pushd src/Model
grep -l 'public function getId()' * | xargs -I {} sed -i -E 's/(class\s.*?extends\sBaseModel)/\1 implements ModelWithId/gm' {}
popd