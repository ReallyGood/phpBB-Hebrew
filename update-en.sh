git clone --no-checkout https://github.com/phpbb/phpbb.git --depth 1
cd phpbb
git reset
git checkout origin/master phpBB/language/en/
mv phpBB/language/en ../language/
git checkout origin/master phpBB/styles/prosilver/theme/en/
mv phpBB/styles/prosilver/theme/en ../styles/prosilver/theme/
cd ..
rm -rf ./phpbb
