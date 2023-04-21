# jgdm-woocommerce-selectors (**Last Update:** 21-04-2023 09:23)

## Taking the legwork out of finding the CSS Selectors to style your shop


## **Sections**

  + [WooCommerce Pages](#woocommerce-pages)
  + [Setup](#setup)
  + [Selectors](#selectors)
  + [Notes](#notes)


## WooCommerce Pages 
[Back to Top](#sections)

Each page in WordPress has a user defined `slug`, an identifier for the page that defines the URL for a WooCommerce page. Examples below...

+ `/homepage/` - WooCommerce Shop Homepage
+ `/shop/` - WooCommerce Products Archive Page
+ `/basket/` - WooCommerce Basket
+ `/my-account/` - WooCommerce My Account
+ `/checkout/` - WooCommerce Checkout
+ `/product/` - Single Product Page (from archive page) 
+ `/privacy/` - WooCommerce Privacy Page
+ `/refund_returns/` - Refund and Returns Page.

This document contains the out of the box ID, Class and other CSS selectors that I've identified should be used to customise the appearance of your WooCommerce Shop.  Unfortunately for the moment they're not theme agnostic which means right now they work only for a custom theme that you make yourself. More work is required.

So for now, If any of these selectors don't work or if you notice anything I might have missed, let me know via a pull request and I'll look at the problem.  :)


<a id="#selectors"></a>


## Setup
[Back to Top](#sections)

### **Instructions and Requirements**

You will need
  + A WordPress installation
  + A MySQL Database with a database name, a database username and password. (Save these details for every time you switch location)
  + Install and activate the WooCommerce plugin by ***Automattic***
  + WordPress Theme Files
     + style.css
     + functions.php
     + index.php
     + screenshot.php 
  + A Web host on the internet or A local hosting server
  + Visual Studio Code is recommended as your text editor.
  + Git VCS installed on your system
  + Ruby Sass to precompile the CSS for your theme.

### Repository Setup

+ `assets/sass` - Sass partials for the custom WordPress theme and WooCommerce Shop
+ `assets/selectors`- Ready made Sass Partial for WooCommerce Selectors - As it stands this is for a custom theme rather than one provided by WooCommerce
+ `template-parts/`- Ready made Sass Partial for WooCommerce Selectors
+ `woocommerce/`- WooCommerce Shop Template Files
+ `functions.php`
+ `index.php`
+ `screenshot.png` - The Theme directory image

By default, Sass does not compile selectors with no styles in them which complicates the purpoose of this repository slightly. You can access every selector you need via the `assets/sass/_selectors.scss` file or `assets/woocommerce/wc-pages/` partials.

### Paths

+ `wp-content/themes/themename/` my example starts with `jgdm-woocommerce-selectors` as the theme directory. So this would be `wp-content/themes/jgdm-wordpress-selectors`. 

+ `wp-content/plugins/woocommerce` - The WooCommerce plugin files go here

+ On localhost, you can access the URL for the project using [http://localhost/jgdm-woocommerce-selectors](http://localhost/jgdm-woocommerce-selectors) <br /> **or** [http://localhost/jgdm-woocommerce-selectors/wp-admin](http://localhost/jgdm-woocommerce-selectors/wp-admin)  to go to the login screen.


### How it Works

This is a set of theme files that is designed to be used with a WordPress installation. Therefore, every file/directory is untracked, other than the contents of `wp-content/themes/jgdm-woocommerce-selectors`. Obviously you can choose to rename the theme directory and make your own theme customisations.

Simply copy the groups of selectors from the specified pages below and add them to your theme, which should include WooCommerce.

+ First, find a local server as DesktopServer or XAMPP for Windows and add WordPress to that space. 

+ Go to the directory you need to be your project root and clone the repositoty.  `git clone https://github.com/jg-digital-media/jgdm-woocommerce-selectors`.

+ Download the latest version of WordPress and add files to the root folder. e.g. `jgdm-woocommerce-selectors`.

+ When you have entered your WordPress and Database credentials, you can add and activate the `WooCommerce` plugin.

+ From this point, you can either add your files to the staging area with the ```-f``` flag via git or remove version control altogether.  If you need to, you can also clone a fresh project using `https://github.com/jg-digital-media/jgdm-woocommerce-selectors` as your git clone url.

+ In Settings, in the Admin area, set the *Permalinks* to `post-name`. This allows you to set page slugs for all the pages, including WooCommerce pages to your sites.

+ Set a product base slug for your shops products  e.g. a slug called "shop".

+ Since I use SASS to generate the CSS Selectors this is where you'll need to write your CSS.  Use a RubySass watch command to precompile CSS in the theme directory of your project.  `sass --watch style.scss:style.css`.

+ If for any reason the following files do not show up on git clone you can add them with touch `style.css` etc. Or add them by your systems GUI in the usual way.

    + style.css
    + style.scss
    + functions.php
    + index.php
    + screenshot.php


[Top](#selectors)





<a name="setup"></a>
[Back to Top](#sections)

## Selectors
[Back to Top](#sections)


### Selectors Navigation - Jump to the pages to view the selectors you need for that page.

 [Shop Home](#shop-homepage) | [Shop Archive](#shop-archive-page) | [Basket](#woocommerce-basket-page) | [MyAccount](#woocommerce-myaccount-page) | [Checkout](#woocommerce-checkout-page) | [Single Product Page](#woocommerce-product-single) | [Returns](#returns) | [Privacy](#privacy)

<a id="shop-homepage"></a>
### Shop Homepage
+ **/homepage/** (Home) - [Top](#selectors)  **Selectors Last Checked:** 13-06-2022 - 11:48

   + First, Look for the loop in your WordPress Template file.

   + The loop then brings in content from the content editor of the page that is assigned by the WooCommerce plugin as the `homepage`. 

   + You then need to target the different blocks with their HTML Class Selectors.

The idea is that the selectors should override the ones used by the WooCommerce plugin that is shipped into your theme with WordPress.

e.g. 

  + `.wp-block-cover`
  + `.has-text-align-center`
  + `.wp-block-media-text`
  + `.wc-block-product-new`
  + `.wc-block-grid`
  + `.wc-block-product-new`
  + `.wc-block-featured-product` 

  
#### **SASS/CSS Selectors to use...**  

```scss

// Shop cover block
.wp-block-cover {

    .wp-block-cover__gradient-background {

    }

    .wp-block-cover__image-background {

    }

    .wp-block-cover__inner-container {

       
        .has-text-color {

            // has text colour seems to be the general class to target

        }
        
        //.has-text-align-left
        //.has-text-align-right
        //.has-text-align-center        

        .wp-block-button {

            .wp-block-button__link {

            }

        }

    }

}

// Section: New Products (Level 2 Heading Element)   .has-text-align-left  .has-text-align-right
.has-text-align-center {

}

// New Products Section Selectors - wc-block-grid 
.wc-block-grid 
.wp-block-product-new {

    .wc-block-grid__products { 

        .wc-block-grid__product {

            .wc-block-grid__product-link {

                .wc-block-grid__product-image {

                    .attachment-woocommerce_thumbnail {

                    }

                }

                .wc-block-grid__product-title {

                }
                
            }
            
            // Note: product sale icon
            .wc-block-grid__product-onsale {

            }

            // Note: "New products" product price selectors
            .wc-block-grid__product-price {

                .woocommerce-Price-amount {

                    .woocommerce-Price-currencySymbol {

                    }  

                }

                // Selectors for sale and strikethrough (full) pricing
                del {

                    .woocommerce-Price-amount {

                        .woocommerce-Price-currentSymbol {

                        }

                    }

                }

                ins {

                    .woocommerce-Price-amount {

                        .woocommerce-Price-currentSymbol {

                        }  

                    }

                }

            }

        }

    }

}

// Media Text Block classes
.wp-block-media-text {

    .wp-block-media-text__media {

        .size-full {

        }

    }

    .wp-block-media-text__content {

    }

}

// Block Media Text: WooCommerce 
.wc-block-media-text {

    .wp-block-media-text__media {

        img,
        .size-full {

            // Note: <figure> .size-full class is available for this element

        }

        .wp-block-media-text__content {

            p {

                // uses an element selector rather than any of the supplied classes

            }

        }

    }

}
                        
// Featured Product Wrapper 
.wc-block-featured-product {

    .wc-block-featured-product__wrapper {

        .wc-block-featured-product__title {

            // Note: Level 2 heading element

        }
        
        .wc-block-featured-product__description {
             
            p {

            }

        }
        
        .wc-block-featured-product__price {

            // Note: Selectors for the price and currency symbol
            .woocommerce-Price-amount {

                .woocommerce-Price-currencySymbol {


                }

            }

        }
        
        .wc-block-featured-product__link {

            .wp-block-button, 
            .aligncenter {

                .wp-block-button__link {                  


                }

            }

        }

    }

}

```


<a id="#shop-archive-page"></a>
### Shop Archive Page
+ **/shop/** (Product Archive Page) - [Top](#selectors) - **Selectors last checked:** 31-05-2022 - 20:30

As far as the shop archive page goes, the page is divided into 4 main structures each with a specific ID.

+ header  ```(#header)```
+ primary ```(#primary)```
+ sidebar ```(#sidebar)```
+ footer ```(#footer)```

The 4 above may be contained inside a div with the ID of #page.


**HTML** 


```html

<!-- Example HTML for WooCommerce -->
<div id="page">   

    <div id="header"> . . . <div>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            . . . 
        
        </main>

    <div id="sidebar"> . . .  </div>

    <div id="footer"> . . . </div>

</div>

```

**SASS/CSS Selectors**

```scss

// Editor Note:  The top level selectors for WooCommerce /shop/ page - included for brevity
#page {

    #header {

    }

    #primary {

    }

    #sidebar {

    }

    #footer {

    }

}

```

** All the Shop Product Archive Page Selectors **

```scss

// Containing element
#page {

    #header {        

        #headerimg {

            h1 {

                a {

                }

            }

            .description {


            }

        }

    }

    #primary {

        #main {            

            .woocommerce-breadcrumb {

                ::before {

                }

                a {
                    
                }

                ::after {

                }

            }

            .woocommerce-products-header {

                .woocommerce-products-header__title, 
                .page-title {
                    

                }

                .page-description {

                    p {

                    }

                }
                
            }

            .woocommerce-notices-wrapper {

            }

            .woocommerce-result-count {

                // paragraph element - e.g. center text alignment
                color: $color-primary;

            }

            .woocommerce-ordering {                

                .orderby {

                    background: yellow;
                    padding: 10px 0;


                    // TODO: Default Sort

                    option {

                        background: #ed9141;

                        outline: green;

                        &.selected {

                            // Note: Adds the selected class to option element on orderby selection
                            background: yellow;

                        }

                    

                    } 

                }

            }

            .products {

                // individual product listing container
                .type-product {

                    .woocommerce-LoopProduct-link {

                        // Note: Style selector for the sale icon when product has a sale price
                        .onsale {
                            

                        }

                        .attachment-woocommerce_thumbnail {

                        }

                        .woocommerce-loop-product__title {
                            

                        }

                        .price {
                            

                            // Selectors for standard pricing - no sale/discount price
                            .woocommerce-Price-amount {

                                bdi {  

                                    .woocommerce-Price-currencySymbol {
                                        
                                        
                                    }

                                }

                            }

                            // Selectors for Full price display
                            del {
                                
                                .woocommerce-Price-amount {

                                    bdi {                                        

                                        .woocommerce-Price-currencySymbol {
                                            

                                        }

                                    }

                                }

                            }

                            // Selectors for discounted/sale price
                            ins {                           

                                .woocommerce-Price-amount {

                                    bdi {           
                                        

                                        .woocommerce-Price-currencySymbol {
                                            

                                        }

                                    }

                                }

                            }

                        }

                    }

                    .product_type_simple {

                        // Note: Add to basket button selector as an anchor element
                        

                    }

                }
                
            }

        }

    }   

    #sidebar {

        /*  
            WooCommerce Sidebar Section 

            Contains Three Child <ul> elements

            1. Search Text Box and Button
            2. Site Pages List - role=navigation
            3. Third Child - Blank <ul> Element by default            
            
            + You can also try using a first-child CSS selector for ul elements
            + that are children for the div element with an ID of #sidebar       
        */        

        ul:first-child {
                
        }
 
        ul {

            li {

                // form conntainer element
                #searchform {

                    div {

                        .screen-reader-text {

                        }

                        #s {

                        }

                        #searchsubmit {

                        }

                    }

                }

            }

            // ul role= navigation - Sidebar pages navigation list
            li.pagenav {

                h2 {

                }

                ul {

                    .page-item {

                        // Note: list item selector that contains an anchor tag for each page

                        a {

                        }
                        
                    }

                }

            }

            // Note: WooCommerce outputs no class selector for second list item; that is meant for the Achives list sidebar
            li {

                h2 {

                    // Archive Title Text

                }
                
                ul {

                    li {

                        a {


                        }

                    }

                }

            }

            // Note: Selector for Sidebar Categories list
            li.categories {

                h2 {

                }

                ul {

                    li.cat-item {

                        a {

                        }

                    }

                }

            }

        }

    }

    hr {

    }

    // #footer is a div element with id of footer (WooCommerce default state)
    #footer {
        
        p {

            a {
                
                &:hover {
                    
                }

            }

        }

    }

}

```



<a id="woocommerce-basket-page"></a>
### WooCommerce Basket
+ **/basket/** (Shop Basket Page) - [Top](#selectors)

The Basket page is the first part of the shopping onboard process where items currently added to the basket will appear.

```scss
// Containing element
.woocommerce {    


    // The Main Basket
    a {

        .woocommerce-notices-wrapper {

        }

        .woocommerce-cart-form {

            .shop_table {

                thead {

                    tr {

                        // Note: TH tables cells. No child selectors
                        .product-remove {}
                        .product-thumbnail {}
                        .product-name {}
                        .product-price {}
                        .product-quantity {}
                        .product-subtotal {} 

                    }

                }

                tbody {

                    tr.woocommerce-cart-form__cart-item {
                        
                        // td table cell classes    
                        .product-remove {

                            a.remove  {

                                &:hover {

                                    // remove button is used with an anchor <a> element 
                                    // You can use a transition for background on hover state
                                }


                            }

                        }

                        .product-thumbnail {

                            a {

                                .attachment-woocommerce_thumbnail {

                                    // Note: this is an image <img> element

                                }

                            }

                        }

                        .product-name {

                            a {

                            }

                        }

                        .product-price {

                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        }

                        .product-quantity {

                            .quantity {

                                .screen-reader-text {

                                }

                                .input-text,
                                .qty {
                                    
                                }

                            }

                        }

                        .product-subtotal {

                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        } 
                        

                        // Note: New Row in the basket (tr ---> td)
                        .actions {

                            // Note: coupon text box and button element
                            .coupon {

                                label {

                                }

                                #coupon_code {

                                }

                                // Selector for the button that applies the coupon
                                button[type="submit"],
                                .button {

                                }

                            }

                            // Selector for the button that Updates the basket. No class or ID                            
                            button[type="submit"],
                            .button {


                            }

                        }

                    }

                }

            }

        }

    }

    // The Basket Totals
    p {

    }

    .cart-collaterals {

        &::before {

        }

        a {

        }

        .cart_totals {

            a {

                h2 {

                    // Level 2 Heading: Basket Totals
                }

                .shop_table {

                    // Note: This element is the cart collaterals Table - table element
                    tbody {



                        // Table Row <tr> for order total
                        .cart-subtotal {

                            th {

                                // Note: table cell and row for order subtotals
                            }

                            td {

                                .woocommerce-Price-amount {

                                    bdi {

                                        .woocommerce-Price-currencySymbol {

                                        }

                                    }

                                }

                            }

                        }

                        // Table Row <tr> for Subtotal
                        .order-total {

                            th {

                                // Note: table cell and row for the total order amount

                            }

                            td {

                                // data-title="Total"
                                strong {

                                    .woocommerce-Price-amount {
                                        // Note: span element

                                        bdi {

                                            .woocommerce-Price-currencySymbol {

                                            }

                                        }

                                    }

                                }

                            }

                        }

                    }

                }

            }

            .wc-proceed-to-checkout {

                a {

                }

                .checkout-button {

                    // .wc-forward

                }

            }

        }        

        &::after {

        }

    }

}

```

<a id="woocommerce-myaccount-page"></a>

### WooCommerce MyAccount Page
+ **/my-account/** My Account Page - ([Top](#selectors))  


```scss

// Containing element
.woocommerce {

    .woocommerce-MyAccount-navigation { 

        ul {

            li {                

                // Note: CSS/Sass selector for the active tab
                & .is-active {
        
        
                }            

            }

            .woocommerce-MyAccount-navigation-link {

                a {

                }

            }

            /* WooCommerce Navigation Tab Classes */
            .woocommerce-MyAccount-navigation-link--dashboard {

            } 

            .woocommerce-MyAccount-navigation-link--orders {

            }

            .woocommerce-MyAccount-navigation-link--downloads {

            }

            .woocommerce-MyAccount-navigation-link--edit-address {

            }

            .woocommerce-MyAccount-navigation-link--edit-account {

            }

            .woocommerce-MyAccount-navigation-link--customer-logout {

            }

        }

    }

    // Note: This is the content area for WooCommerce MyAccount pages
    // according to sub tab clicked
    .woocommerce-MyAccount-content {

        .woocommerce-notices-wrapper {

            .woocommerce-message {

                &::before {


                }

                &::after {

                }

            }

        }

        p {
            // "The following addresses will be used on the checkout page by default"
        }
        

        /* 
        * 
        * MyAccount Page Dashboard Tab
        */
        p {

            strong {

            }

            // logout and other links
            a {

            }

        }        


        /* 
        * 
        * MyAccount Page Orders Tab - selectors for orders list state needed
        */
        .woocommerce-message, .woocommerce-message--info, .woocommerce-Message .woocommerce-Message--info, .woocommerce-info {

        }

        // tick icon - messages container element
        .woocommerce-info {

            /* border-top-color: ; */        
        
            &::before {

                /* color: #e1e85be; */
                /* content: "\e015\" */

            }

            // Orders Tab Button - "browse products"
            .woocommerce-Button {


            }

            // WooCommerce message
            .woocommerce-message {

                &::after {

                    /* clear: both; */

                }

            }             

        }

        // Browse products button
        .woocommerce-Message--info {

            // Orders tab button - "browse products"
            .woocommerce-Button button {

                a {

                }

            }

        }

        
        /* 
        * 
        * MyAccount Page Downloads Tab
        */

        // ...  Same selectors as orders page  ...


        /* 
        * 
        * MyAccount Page Addresses Tab  /edit-address/
        */
        .woocommerce-Addresses {     

            &::before {

            } 

            .woocommerce-Address {                

                .col-1 {

                    .woocommerce-Address-title {

                        h3 {

                        }

                        .edit {

                            // add/edit address <a> hyperlink

                        }

                    }

                    address {

                        // 2 page states - 
                        // Address not yet set. "You have not set up this type of address yet"
                        // lists the address as a series of line breaks when address is saved

                    }

                }
            

                .col-2 {

                    &::after {

                        // clear: both;

                    }

                    .woocommerce-Address-title {

                        h3 {

                        }

                        .edit {

                        }

                    }

                    address {

                        // 2 States - 
                        // Address not yet set. "You have not set up this type of address yet"
                        // lists the address as a series of line breaks when address is saved

                    }

                }

            }
            
        }        
           

        // Address Tab - Addresses - /my-account/edit-address/billing/
        // Address Tab - Addresses - /my-account/edit-address/shipping/
        form {

            h3 {

                    
            }

            // Note: Shipping and Billing Addresses have the same selectors
            .woocommerce-address-fields {

                .woocommerce-address-fields__field-wrapper {


                    // form first name
                    p.form-row-last {

                    }

                    // form last name
                    .form-row-first {

                    }

                    .form-row-wide {

                    }

                    // general containing paragraph selector
                    p {

                        label {

                            .required {

                            }

                            .optional {

                            }

                        }

                        .woocommerce-input-wrapper {

                            .input-text {

                            }

                            // for the country/region select box
                            .country_select {

                            }

                            // Form field ID's
                            #billing_first_name,
                            #shipping_first_name {

                            }

                            #shipping_first_name,
                            #shipping_first_name {

                            }

                            #billing_country,
                            #shipping_country {

                            }

                            #billing_country,
                            #shipping_country {

                            }

                            #billing_address_1,
                            #shipping_address_1 {

                            }

                            #billing_address_2,
                            #shipping_address_2 {

                            }

                            #billing_city,
                            #shipping_city {

                            }

                            #billing_state,
                            #shipping_state {

                            }

                            #billing_postcode,
                            #shipping_postcode {

                                //zipcode for US

                            }

                            #billing_phone {

                            }

                            #billing_email {

                            }

                        }

                    }

                }


                // Save Address Button
                p {

                    .button,
                    input[type="submit"] {

                    }

                }

            }   

            // edit-address/shipping
            /* .woocommerce-address-fields {

                // Editor Note:  As Billing Address Selectors - Cut for brevity

            }  */        

        }
        

        /* 
        * 
        * MyAccount Page Account Details Tab
        */

        .woocommerce-EditAccountForm {

            // woocommerce-form-row
            // form-row-first
            // form-row-last
            .form-row {

                // <p>

                &::before {

                } 
                
            }

            .woocommerce-form-row {

                ::before {

                }

                label {

                    .required {

                    }

                }

                .input-text {

                }

                // selector that instructs on display name edit
                span {

                    em {

                    }

                }

                &::after {

                }

            }

            fieldset {

                legend {

                }

                .form-row {

                    &::after {
                        
                    }

                }

                .form-row-wide {

                }

                .woocommerce-form-row {

                    &::before {

                    }

                    label {

                    }

                    .password-input {

                        .input-text,
                        .woocommerce-Input--password,
                        input[type="password"] {

                        }                        

                        input[type="text"] {
                            
                        }


                        .show-password-input {

                            // password toggle class
                            & .display-password {          

                            }

                            &::after {

                            }

                        }

                    }

                    ::after {

                    }

                }

            }

            .clear {

            }

            p {

                button[type="submit"],
                .woocommerce-Button {

                }

            }

            // Note: The logout sub navigation logs you out directly

        }
        
    }

}

```

<a id="woocommerce-checkout-page"></a>
### WooCommerce Checkout Page   

+ **/checkout/** - Checkout Page - ([Top](#selectors))

```scss

// Containing element
.woocommerce {

    .woocommerce-notices-wrapper {

    }

    .woocommerce-form-coupon-toggle {

        .woocommerce-info {

            //<div>

            &::before {

            }

            // coupon toggle link
            .showcoupon {
                    
            }

            &::after {

            }

        }

    }

    .checkout_coupon {

        // NOTE: <form> This element is displayed in the browser when .showcoupon toggle class is open
        p {

        }

        .form-row-first {

            label {

                abbr.required {

                }
                
            }

            // Contains the coupon code text box
            .input-text {

            }

        }

        .form-row-last {

            // contains coupon button
            .button,
            button[type="submit"] {

            }            

        }

        .clear {

        }

    }

    .woocommerce-checkout {

        #customer_details {

            .col-1 {

                .woocommerce-billing-fields {

                    // Billing Fields

                    h3 {

                    }

                    .woocommerce-billing-fields__field-wrapper {

                        .form-row {

                            label {

                                .required {

                                }

                            }

                            .woocommerce-input-wrapper {

                                .input-text {

                                }

                                .country_to_state {

                                    option {

                                    }

                                }

                                // select2  Note: select1-? select3-?
                                .select2-container {

                                    .selection {

                                        .select2-selection {

                                            .select2-selection__rendered {

                                            }

                                            .select2-selection__arrow {

                                                b {

                                                }
                                                
                                            }

                                        }

                                    }

                                } 

                            }

                        }

                    }
                }

            }

            .col-2 {

                .woocommerce-shipping-fields {

                }

                .woocommerce-additional-fields {

                    h3 {

                    }

                    .woocommerce-additional-fields__field-wrapper {

                        .notes {

                            label#order_comments {

                            }

                            .woocommerce-input-wrapper {

                                #order_comments {

                                }

                            }

                        }

                    }

                }

            }

        }

    }

    .order_review_heading {

    }

    .woocommerce-checkout-review-order {

        .woocommerce-checkout-review-order-table {

            thead {

                tr {

                    th.product-name {

                    }

                    th.product-total {

                    }

                }

            }

            tbody {

                .cart_item {

                    .product-name {
                        
                        // table cell

                        .product-quantity {

                        }

                    }

                    .product-total {
                        
                        // table cell
                        .woocommerce-Price-amount {

                            bdi {

                                // styling for amount

                                .woocommerce-Price-currencySymbol {

                                }

                            }

                        }

                    }

                }

            }

            tfoot {

                .cart-subtotal {

                    th {

                        // table header cell
                    }

                    td {

                        // table cell
                        .woocommerce-Price-amount {

                            bdi {

                                // styling for amount
                                .woocommerce-Price-currencySymbol {

                                }

                            }

                        }

                    }

                }

                .order-total {

                    th {

                        // table header cell                                
                    }

                    td {

                        // strong in place of span for subtotal
                        strong {

                            .woocommerce-Price-amount {

                                bdi {

                                    // styling for amount
                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        }

                    }

                }

            }

        }

        #payment {

            // Note: List of available payment methods - Containing element
            .wc_payment_methods {

                
                ::before {
                        
                }

                .woocommerce-notice--info {

                    ::before {
                        
                    }


                    ::after {
                            
                    }

                }

                ::after {
                    
                }

            }

            // Cotaining element for placing checkout order
            .place-order {

                noscript {

                }

                .woocommerce-terms-and-conditions-wrapper {

                    .woocommerce-privacy-policy-text {

                        p {

                            .woocommerce-privacy-policy-link {

                            }

                        }

                    }

                }

                #place_order {

                }

            }

        }

    }

}  

```

<a id="woocommerce-product-single"></a>

### WooCommerce Single Product
+ **/product/** - Product Page - ([Top](#selectors)) 


```scss

// /product/  Selectors for single product page as clicked through from shop archive page  
div#page {

    #header {        

        #headerimg {

            h1 {

                a {

                }

            }

            .description {


            }

        }

    }

    hr {

    }

    #primary {  
        
        #main {

            .woocommerce-breadcrumb {

                &::before {

                }

                a {

                }

                &::after {

                }

            }

            .woocommerce-notices-wrapper {

            }

            .type-product {

                .onsale {
                    
                    // Note: onsale span element for inclusion when a product is a sale product

                }

                .woocommerce-product-gallery {

                    // div containing element

                    .woocommerce-product-gallery__wrapper {

                        .woocommerce-product-gallery__image {

                            a {

                                .wp-post-image {

                                }

                            }

                        }

                    }

                }

                // Note: Use the entry summary classes for the Single Product Template
                .entry-summary {

                    // Note: product details and basket customisations

                    .entry-title {

                        // Note: product title per single product templates

                    }

                    
                    .price {

                        // Standard product price
                        .wooCommerce-Price-amount {

                            bdi {

                                .woocommerce-Price-currencySymbol {

                                }

                            }

                        }

                        // Sale product price
                        del {

                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        }

                        ins {

                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {
                                        
                                    }

                                }

                            }

                        }

                    }

                    .woocommerce-product-rating {
                        
                        .star-rating {

                            span {

                                ::before {

                                }

                                strong {

                                }

                                span {

                                    ::before {

                                    }

                                }

                            }                            

                        }
                        
                        .woocommerce-review-link {

                            .count {

                            }

                        }
                                
                    }

                    .price {                       

                        /* STANDARD PRICE */
                        .woocommerce-Price-amount {

                            bdi {

                                .woocommerce-Price-currencySymbol {

                                }

                            }

                        }

                        /* SALE PRICE */
                        del {
                            
                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        }

                        // sale/discounted price
                        ins {
                            
                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {

                                    }

                                }

                            }

                        }

                    }

                    .woocommerce-product-details__short-description {

                        p {

                        }

                    }

                    .cart {

                        .quantity {

                            .screen-reader-text {

                            }

                            .qty {

                            }

                        }

                        .single_add_to_cart_button {


                        }

                    }

                    .product_meta {

                        .posted_in {

                            a {

                            }

                        }

                    }

                }

                .wc-tabs-wrapper {

                    /* Note:  

                        3 Tabs

                        -> Description 
                        -> Additional information 
                        -> Reviews

                    */
                    .tabs {

                        &::before {

                        }

                    }

                    .wc-tabs {

                        li {

                            &.active {

                                // Note: Class attached to the active tab

                            }

                        }

                        .description_tab {

                            a {

                            }

                        }

                        .additional_information_tab {

                            a {

                            }

                        }

                        .reviews_tab {

                            a {

                            }

                        }

                    }

                    // wc-tabs content panel - container class
                    .woocommerce-Tabs-panel {

                        // content panel - description tab
                        h2 {

                        }

                        p {

                        }

                        //content panel - additional info 

                        h2 {


                        }

                        .woocommerce-product-attributes {

                            tbody {

                                tr.woocommerce-product-attributes-item {

                                    th.woocommerce-product-attributes-item__label {

                                    }

                                    td.woocommerce-product-attributes-item__value {

                                        p {

                                        }

                                    }

                                }

                            }

                        }

                        // content panel - Reviews Tab

                        .woocommerce-Reviews {

                            #comments {

                                .woocommerce-Reviews-title {

                                    span {

                                    }

                                }

                                // When there is a review list
                                ol.commentlist {

                                    li {

                                        .comment_container {

                                            .avatar {

                                            }

                                            .comment-text {

                                                .star-rating {

                                                    span {

                                                        .rating {

                                                        }
                                                    }

                                                }

                                                .meta {

                                                    //Note:  comment meta info selectors

                                                    
                                                    .woocommerce-review__author {

                                                    }

                                                    .woocommerce-review__dash {

                                                    }

                                                    .woocommerce-review__published-date {

                                                    }


                                                }

                                                .description {

                                                    p {

                                                    }

                                                }

                                            }

                                        }

                                    }

                                }

                                .woocommerce-noreviews {

                                    // Note: text "there are no reviews yet"
                                }

                            }                            

                            #review_form_wrapper {
                                                           
                                #review_form {

                                    #respond {

                                        // use ID or class of .comment-respond 

                                        .comment-reply-title {

                                            small {

                                                a {

                                                }

                                            }

                                        }


                                        // Comment Form for making new reviews
                                        .comment-form {

                                            .comment-form-rating {

                                                .stars {

                                                    span {

                                                        .star-1,
                                                        .star-2,
                                                        .star-3,
                                                        .star-4,
                                                        .star-5 {

                                                            &::before {

                                                            }

                                                        }

                                                    }

                                                }

                                                #rating {

                                                    option {

                                                    }

                                                }

                                            }

                                            .comment-form-comment {

                                                label {

                                                    .required {

                                                    }

                                                }

                                                #comment {

                                                }

                                            }

                                            .form-submit {

                                                .submit {

                                                }

                                            }

                                        }

                                    }

                                }

                            }

                            .clear {

                            }

                        }

                    }

                }

                .related {

                    h2 {

                    }


                    ul.products {

                        .product-type-simple {

                            .woocommerce-loop-product__link {

                                .attachment-woocommerce_thumbnail {

                                }

                                .woocommerce-loop-product__title {

                                }

                                // Star Rating - single product pages
                                .star-rating {

                                    span {

                                        .rating {

                                        }

                                    }

                                }

                                .price {

                                    // Standard Prices
                                    .woocommerce-Price-amount {

                                        bdi {

                                            .woocommerce-Price-currencySymbol {

                                            }

                                        }
                                    }


                                    // Note: Sale Prices
                                    del {

                                        span {                                           

                                            .woocommerce-Price-amount {

                                                bdi {

                                                    .woocommerce-Price-currencySymbol {

                                                    }

                                                }

                                            }

                                        }

                                    }

                                    ins {

                                        span {                                            

                                            .woocommerce-Price-amount {

                                                bdi {

                                                    .woocommerce-Price-currencySymbol {

                                                    }

                                                }

                                            }

                                        }

                                    }                                    

                                }

                            }

                            .add_to_cart_button {

                                // Note: Add to Basket Button

                            }

                        }

                    }


                }

            }

        }

    }

    #sidebar {

        // #sidebar - same as the product archive page - ul containing element

        ul {

            li {

                #searchform {

                    div {

                        .screen-reader-text {

                        }

                        #s {

                        }

                        #searchsubmit {

                        }

                    }

                }

            }

            // Note: ul role navigation - Sidebar pages navigation list
            li.pagenav {

                h2 {

                }

                ul {

                    .page-item {

                        // list item class selector that contains an anchor tag for each page

                        a {

                        }
                        
                    }

                }

            }

            // Note: No class selector for second list item - meant for the Sidebar archives list
            li {

                h2 {

                    // Heading 2 Element Selector - Archive Title Text
                }
                
                ul {

                    li {

                        a {


                        }

                    }

                }

            }

            // Note: This list item used for Categories list item
            li.categories {

                h2 {

                }

                ul {

                    li.cat-item {

                        a {

                        }

                    }

                }

            }

        }


    }

    #footer {

        // Note: #footer selector markup same as product archive page
        p {

            a {

            }

        }
    
    }

}

```

[Top](#selectors)



<a id="#returns"></a>
### Returns
([Top](#selectors)) 

```scss
// Containing element
.side-one > article {

    h1, h2, h3, h4, h5, h6 {

    }

    p {

        strong, b,
        em, i {

        }
    }

    ul, ol {

        li {

        }

    }

}

```


[Top](#selectors)

<a id="#privacy"></a>

### Privacy
([Top](#selectors)) 
```scss

// Containing element
.side-one > article {

    h1, h2, h3, h4, h5, h6 {

    }

    p {

        a {

        }

        strong, b {

        }

        em, i {

        }

        .privacy-policy-tutorial {

        }

    }

}
```


[Top](#selectors)


<a id="#notes"></a>

## Notes
[Top](#sections)
+ #sidebar selector for Shop Archive and product page shou;d be built to match. For now I've left a note on the #sidebar element for ```/product```.

