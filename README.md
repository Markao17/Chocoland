# chocoland

This project is a custom WordPress site developed with a theme based on [them.es Starter Theme](https://github.com/them-es/starter-fse), using the Advanced Custom Fields (ACF) Pro plugin for creating fields and custom blocks. It includes a custom post type for "Events," as well as TailwindCSS for styling and Swiper for slider functionality.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Scripts](#scripts)
- [Local Development](#local-development)
- [License](#license)

---

## Project Overview
This repository contains the `wp-content` folder of a WordPress installation. Please clone it to your WordPress project's root directory and run the installation steps below.

## Features
- **ACF Pro Blocks**: Custom "Hero" and "News List" blocks.
- **Custom Post Type**: Events.
- **Styling with TailwindCSS**.
- **Slider with Swiper**.
- **Webpack and npm Scripts**: For asset compilation and development.

## Installation

### Prerequisites
- **PHP**: 8.2.23 or later
- **Node.js** and **npm**: Ensure Node.js and npm are installed for managing dependencies.
- **WordPress**: Version 6.6.2

### Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Markao17/Chocoland.git wp-content
   ```
   Or fork the repository and clone your fork instead.

2. **Install Dependencies**:
   ```bash
    cd wp-content
    npm install
    ```
3. **Build Assets**:
    ```bash
    npm run build
    ```

4. **Activate the Required Plugins**:
    - Go to the WordPress admin dashboard.
    - Navigate to `Plugins`.
    - Activate the `Advanced Custom Fields Pro` plugin.

5. **Activate the Theme**:
    - Go to the WordPress admin dashboard.
    - Navigate to `Appearance` > `Themes`.
    - Activate the `Chocoland` theme.

6. **Import the Database**:
    - Import the database file [placeholder] to your WordPress database.
    - Using wp-cli update the site URL in the database:
    ```bash
    wp search-replace 'http://wyperformance-challenge.local' 'http://your-site-url.local'
    ```

    **The default admin credentials are:**
    - Username: `admin`
    - Password: `admin`

7. **Set the Permalinks**:
    - Go to the WordPress admin dashboard.
    - Navigate to `Settings` > `Permalinks`.
    - Click save to make sure the permalinks were cleared.

### Alternative installation for Local by Flywheel
If you use local by flywheel, you can import the zip from the [local zip file](https://mab.to/t/0KAZnlzCzHK/eu1) folder to your local. Just Drag & Drop the zip file to the Local by Flywheel app.

### Scripts and Styles
The available commands for npm are:
`npm run build`: Compiles the assets for production.
`npm run watch`: Compiles the assets for development and starts a localhost instance with the proxy of `http://wyperformance-challenge.local`.