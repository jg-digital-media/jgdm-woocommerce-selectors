# jgdm-woocommerce-selectors

## Taking the legwork out of finding the CSS Selectors to style your shop (**Last Update:** 20-05-2022 - 16:20)

## WooCommerce Pages 

Each page in WordPress has a user defined `slug`, an identifier for the page that defines the URL for a WooCommerce page. Examples below...

+ `/homepage/` - WooCommerce Shop Homepage
+ `/shop/` - WooCommerce Products Archive Page
+ `/basket/` - WooCommerce Basket
+ `/my-account/` - WooCommerce My Account
+ `/checkout/` - WooCommerce Checkout
+ `/product/` - Single Product Page (from archive page) 
+ `/privacy/` - WooCommerce Privacy Page

This document contains the out of the box ID, Class and other CSS selectors that I've identified should be used to customise the appearance of your WooCommerce Shop.

If any of these don't work or if you notice anything I might have missed, let me know via a pull request and I'll look at the problem.  :)


### **You will need....**

  + Git installed on your system
  + Ruby Sass
  + A WordPress installation and theme
  + A text editor  (I recommend Visual Studio Code)
  + A style.css file

Simply copy the groups of selectors from the specified pages below and add them to your theme.


<a id="#document-navigation"></a>
## Document Navigation

Jump to the pages to view the selectors you need.

[Shop Home](#shop-homepage) | [Shop Archive](#shop-archive-page) | [Basket](#woocommerce-basket-page) | [MyAccount](#woocommerce-myaccount-page) | [Checkout](#woocommerce-checkout-page) | [Single Product Page](#woocommerce-product-single)


<a id="shop-homepage"></a>
### Shop Homepage
+ **/homepage/** (Home)  [Top](#document-navigation)



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

.wp-block-cover {

    .wp-block-cover__gradient-background {

    }

    .wp-block-cover__image-background {

    }

    .wp-block-cover__inner-container {

        .has-text-color {

            //has text colour seems to be the neutral class to target

        }

        .wp-block-button {

            .wp-block-button__link {

            }

        }

    }

}


/* Section: New Products  Level 2 Heading Element */
.has-text-align-center {

}


/* New Products Section Selectors - wc-block-grid */
.wc-block-grid 
.wp-block-product-new {

    .wc-block-grid__products { 

        .wc-block-grid__product {

            a.wc-block-grid__product-link {

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

            // Note: product price selectors
            .wc-block-grid__product-price {

                // Selectors - standard pricing
                span {

                    .woocommerce-Price-amount {

                        .woocommerce-Price-currencySymbol {

                        }  

                    }

                }


                // Selectors for sale and strikethrough full pricing
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


/* Media Text Block classes */
.wp-block-media-text {

    .wp-block-media-text__media {

        .size-full {

        }

    }

    .wp-block-media-text__content {

    }

}


/* Block Media Text: WooCommerce */
.wc-block-media-text {

    .wp-block-media-text__media {

        img {

            // Note: .size-full class is available for this element

        }

        .wp-block-media-text__content {

            p {

            }

        }

    }

}

                        
/* Featured Product Wrapper */
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
+ **/shop/** (Product Archive Page) [Top](#document-navigation)

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

// TODO: Confirm product page selectors
#page {

    color: blue;

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

                a {

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

            }

            .woocommerce-ordering {

                .orderby {

                    option {

                        &.selected {

                            // Note: Adds the selected class to option element on orderby selection

                        }

                    } 

                }

            }

            .products {

                // products archive page - product list container element
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


        /* WooCommerce Sidebar Section 

        Three Child <ul> elements

        1. Search Text Box and Button
        2. Site Pages List - role=navigation
        3. Third Child - Blank <ul> Element by default
        */

        
        // Author information and Search Form - You can also try using a first-child CSS 
        // selector for ul elements that are children for the div element with an ID of #sidebar        
        ul {

            li {

                // 
                #searchform {

                    // Note: <form> element

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

            // Note: WooCommerce outputs no class selector for second list item; that is meant for the Sidebar archives list
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

    #footer {

        // Note: #footer is a div element  with id of footer (WooCommerce default state)
        p {

            a {

            }

        }

    }

}

```



<a id="woocommerce-basket-page"></a>
### WooCommerce Basket
+ **/basket/** (Shop Basket Page) [Top](#document-navigation)

The Basket page is the first part of the shopping onboard process where items currently added to the basket will appear.

```scss

// TODO: Confirm Basket Page Selectors 
.woocommerce {

    a {

        .woocommerce-notices-wrapper {

        }

        .woocommerce-cart-form {

            .shop_table {
                
                thead {

                    tr {

                        // Note: TH tables cells.  No child selectors
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

                            a {

                                &:hover {

                                    // remove button is used with an anchor <a> element 
                                    // You can use a transition for background on hover state
                                }


                            }

                            a.remove {

                                &:hover {

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

                                    .input-text,
                                    .qty {
                                        
                                    }

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
                        

                        // Note: Form Basket Buttons Row  tr ---> td
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

    .cart-collaterals {

        &::before {

        }

        &::after {

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


                        // tr element
                        // Table Rows for Subtotal and Total Amounts
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

                        .order-total {

                            th {

                                // Note: table cell and row for the total order amount
                            }

                            td {

                                .woocommerce-Price-amount {
                                    // Note: span element

                                    strong {

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

                }

            }

        }

    }

}

```

<a id="woocommerce-myaccount-page"></a>

### WooCommerce MyAccount Page
+ **/my-account/** My Account Page ([Top](#document-navigation))  


```scss

// TODO: Confirm MyAccount Page selectors
.woocommerce {

    .woocommerce-MyAccount-navigation {
        
            

        // Note: CSS/Sass selector for the active tab
        & .is-active {


        }
            

        ul {

            .woocommerce-MyAccount-navigation-link {

                a {

                }

            }

            /* WooCommerce Navigation Classes */
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
            // The following addresses will be used on the checkout page by default
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
        * MyAccount Page Orders Tab
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

            // Orders tab button - "browse products"
            .woocommerce-Button button {



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

        // ...  Same as orders page  ...



        /* 
        * 
        * MyAccount Page Addresses Tab  /edit-address/
        */
        .woocommerce-Addresses {

            &::before {

            }


            .col-1 {

                .woocommerce-Address-title {

                    h3 {

                    }

                    .edit {

                        // add/edit address

                    }

                }

                address {

                    // 2 page states - 
                       // Address not yet set. "You have not set up this type of address yet"
                       // lists the address as a series of line breaks when address saved

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
                      // lists the address as a series of line breaks when address saved

                }

            }

        }


        // Address Tab - Addresses - /my-account/billing/
        // Address Tab - Addresses - /my-account/shipping/

        form {

            h3 {

                    
            }

            // Note: Shipping and Billing Addresses
            .woocommerce-address-fields {

                .woocommerce-address-fields__field-wrapper {

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

                            .country_select {

                            }

                        }

                    }

                }

                p {

                    .button,
                    input[type="submit"] {

                    }

                }

            }

            // edit-address/shipping/                 
            .woocommerce-address-fields { 

                // Editor Note:  As Billing Address Selectors - Cut for brevity

            }

        }
        

        /* 
        * 
        * MyAccount Page Account Details Tab
        */

        .woocommerce-EditAccountForm {

            .form-row {

                &::before {

                }

            }

            .woocommerce-form-row {

                label {

                    .required {

                    }

                }

                .input-text {

                }

                span {

                    em {

                    }

                }

            }

            fieldset {

                legend {

                }

                .woocommerce-form-row {

                    &::before {

                    }

                    .password-input {

                        .input-text,
                        .woocommerce-Input--password,
                        input[type="password"] {

                        }

                        .show-password-input {

                            &::after {

                            }

                            & .display-password {

                            }

                        }

                    }

                }

                .form-row {

                    &::after {
                        
                    }

                }

                .form-row-wide {

                }

            }

            .clear {

            }

            p {

                button[type="submit"],
                .wooCommerce-Button {

                }

            }

            // Note: The logout sub navigation logs you out directly

        }
        
    }

}

```

<a id="woocommerce-checkout-page"></a>
### WooCommerce Checkout Page   

+ **/checkout/** - Checkout Page ([Top](#document-navigation))

```scss

.woocommerce {

    .woocommerce-notices-wrapper {

    }

    .woocommerce-form-coupon-toggle {

        .woocommerce-info {

            &::before {

            }

            &::after {

            }

            // coupon toggle link
            .showcoupon {
                    
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

            // contains coupon code text box
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

            }

            .col-2 {

            }

        }
    }

    #order_review_heading {


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

            .wc_payment_methods {

            }

            .place-order {

                .woocommerce-terms-and-conditions-wrapper {

                    .woocommerce-privacy-policy-text {

                        p {

                            .woocommerce-privacy-policy-link {

                            }

                        }

                    }

                }

                .woocommerce_checkout_place_order {

                }

            }

        }

    }

}     

```

<a id="woocommerce-product-single"></a>

### WooCommerce Single Product
+ **/product/** - Product Page  ([Top](#document-navigation)) 


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

                &::after {

                }

                a {

                }

            }

            .woocommerce-notices-wrapper {

            }

            .type-product {

                .onsale {
                    
                    // Note: onsale span element for inclusion when there is a product sale

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

                    .woocommerce-product-rating {
                        
                        .star-rating {

                            span {

                                strong {

                                }

                                .rating {

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

                        // strikethrough styling
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

                                // TODO: Review Form Wrapper                                
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

                                    // TODO: Single product page onpage styling for related products

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

        // TODO: #sidebar - same as the product archive page - ul containing element

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

[Top](#document-navigation)


