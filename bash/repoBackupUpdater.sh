#!/usr/bin/env bash
git clone https://www.github.com/kkamara/kkamara
cd kkamara
git remote add bb git@bitbucket.org:kkamara2/kkamara
git push bb main
cd ..
rm -rf kkamara
