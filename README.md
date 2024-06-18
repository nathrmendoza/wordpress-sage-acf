# SAGE x ACF
A theme boilerplate based on roots.io sage and advanced custom fields.

## How it works
This theme will require you to have ACF, if you're using bedrock add it as a dependency via composer Here's a [packagist link](https://packagist.org/packages/wordpress-premium/advanced-custom-fields-pro) for it. Alternatively, manually install it via plugins on dashboard. This theme utlizes laravel blade templates using roots.io acorn. For styling I've implemented both SASS and Tailwind CSS.

## Initial set up
- Run `composer install` and `yarn` to install all dependencies 
- Import the `acf-export-2024-06-18.json` file from the root directory to ACF, go to tools and import.

## Making new fields
The imported json file will already include a page components flexible field under Page Fields. I've also added a few blocks on it: basic hero, wysiwyg and two column and created the reciprocate blade template files for each. To add new blocks do the following:

- Add new block under page components make sure to remember the field block name
- Add whatever fields you need for the block
- On the theme directory navigate to `resources/views/sections/components`
- This file has a while case that checks for the `page_components` flexible field for blocks, within the while loop there should be a switch case where you'll see the blocks I've already created. Add a new case for your block.
- Make sure to set the `$data` object with the fields added to your block, follow the sample I've made.
- Once done, navigate to `resources/views/components` folder and create a new file. The naming format should be `block-name.blade.php`.
- From the file created you can now render your HTML and display the fields you require.