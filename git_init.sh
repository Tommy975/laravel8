#!/bin/bash
echo "# laravel8" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Tommy975/laravel8.git
git push -u origin main
