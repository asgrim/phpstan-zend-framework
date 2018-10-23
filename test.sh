#!/usr/bin/env bash

set -xeu pipefail

vendor/bin/phpstan analyse -c phpstan.neon -l 7 test/fixture
