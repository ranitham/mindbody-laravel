#!/bin/bash

php update.php

# Rename service php files
for file in *_x0020_*.php; do mv "$file" "${file/_x0020_/_}"; done
files=$(grep -l _x0020_ *.php) && echo $files | xargs sed -i 's/_x0020_/_/g'

# unprotect
for file in *.php; do sed -i 's/protected/public/g' $file; done

# fix type hinting
for file in *.php; do sed -i 's/\\Nlocascio\\Mindbody\\MBOSoap\\Class/\\Nlocascio\\Mindbody\\MBOSoap\\ClassCustom/g' $file; done
sed -i 's/\@return Class/\@return ClassCustom/g' ArrayOfClass.php
sed -i 's/\@param Class/\@param ClassCustom/g' ArrayOfClass.php
sed -i 's/\@var Class\[\]/\@var ClassCustom\[\]/g' ArrayOfClass.php
sed -i 's/\\Nlocascio\\Mindbody\\MBOSoap\\ClassCustomDescription/\\Nlocascio\\Mindbody\\MBOSoap\\ClassDescription/g' ClassDescription.php
sed -i 's/\\Nlocascio\\Mindbody\\MBOSoap\\ClassCustomSchedule/\\Nlocascio\\Mindbody\\MBOSoap\\ClassSchedule/g' ClassSchedule.php
sed -i 's/\@return long/\@return int/g' ArrayOfLong.php
sed -i 's/\@param long/\@param int/g' ArrayOfLong.php
sed -i 's/\@var long\[\]/\@var int\[\]/g' ArrayOfLong.php
files=$(grep -l base64Binary *.php) && echo $files | xargs sed -i 's/base64Binary/string/g'

files=$(grep -l anyType *.php) && echo $files | xargs sed -i 's/anyType/mixed/g'


# upgrade DateTime to Carbon
for file in *.php; do sed -i 's/\\DateTime/\\Carbon\\Carbon/g' $file; done
sed -i 's/\@return dateTime/\@return \\Carbon\\Carbon/g' ArrayOfDateTime.php
sed -i 's/\@param dateTime/\@param \\Carbon\\Carbon/g' ArrayOfDateTime.php
sed -i 's/\@var dateTime\[\]/\@var \\Carbon\\Carbon\[\]/g' ArrayOfDateTime.php
files=$(grep -l Carbon *.php) && echo $files | xargs sed -i 's/return false/return null/g'
