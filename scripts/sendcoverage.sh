#! /bin/sh

CODECLIMATE_REPO_TOKEN="0a81f1b6d6362d175831b791e749725a3bc76c8f0b7455fc6d787cae8ef622ef" test-reporter --stdout > codeclimate.json

"curl -X POST -d @codeclimate.json -H 'Content-Type: application/json' -H 'User-Agent: Code Climate (PHP Test Reporter v0.1.1)' https://codeclimate.com/test_reports"
