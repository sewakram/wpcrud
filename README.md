# Basic example of wordpress plugin to select, update, insert and delete from database (CRUD)

This is the code for the article:

https://laloah.wordpress.com/2013/06/14/basic-example-of-wordpress-plugin-to-select-update-insert-and-delete-from-database-crud

Click on "Download ZIP" to download the example

Tired of looking for a **basic example** of a plugin to solve my needs for CRUD operations on a custom table in wordpress I decided to to it myself, and here it is.

This plugin is just a **starting point** to develop your own management plugin.

![plugin](https://laloah.files.wordpress.com/2013/06/plugin.png?w=300&h=91)

This example works with a **custom table** in the wordpress database. it’s  written with simplicity in mind so you can understand everithing quickly.

Includes the following files

*   **init** – plugin initialization, where everything is put toghether
*   **list** – showing a list of items
*   **update** – for updating and deleting items
*   **create** – for inserting new items
*   **style-admin.css** – stylesheet to use in the admin screens

## How to use the code

First, install and use the plugin **to understand how it works**:

*   Download the files
*   Unzip to wp-content/plugins folder
*   Create the table manually on the same wordpress database using the file _example-database.sql_ (you can use the phpmyadmin tool)
*   Activate the plugin

You will see a new administration menu on your left:

![menu items](https://laloah.files.wordpress.com/2013/06/menu-items.jpg?w=625)

Take your time and perform all operations: _select, insert, update and delete_

## Customize the code
get back sewakdeshmukh19@gmail.com

*   **Replace

To learn how to use the wordpress database functions: [http://codex.wordpress.org/Class_Reference/wpdb](http://codex.wordpress.org/Class_Reference/wpdb)

The code is written with the minimum to avoid complexity.

Remember that the purpose of this code is to help you build your own plugin with validations, style, proper messages, etc.

Good luck!

