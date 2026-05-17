#!/bin/bash
# Run Codegen
java  -jar swagger-codegen-cli.jar generate -l php -i mindbody.json -c swagger-php-config.json -t swagger-templates/php

#Delete src/tests
rm -rf src/test

pushd src/Api
for i in *Api.php; do sed -i -E 's/(function\s.*\(.*?\)\s*:\s*)(.*?\[\])/\1array/gm' $i; done
#for i in *Api.php; do sed -i -E 's/(function\s.*\(.*?\)\s*:\s*)object/\1array/gm' $i; done
popd

pushd src/Model
grep -l 'public function getId(): int' * | xargs -I {} sed -i -E 's/(class\s.*?extends\sBaseModel)/\1 implements ModelWithIntId/gm' {}
grep -l 'public function getId(): string' * | xargs -I {} sed -i -E 's/(class\s.*?extends\sBaseModel)/\1 implements ModelWithStringId/gm' {}

popd