<?php include_once "header.php"; ?>
language:      node_js
git:
  depth:       3
node_js:
  - "node"
install:       npm install
script:
  - npm test
  - gulp
cache:
  directories:
    - node_modules
notifications:
  email:       false
