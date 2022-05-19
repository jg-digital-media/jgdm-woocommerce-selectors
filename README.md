# jgdm-woocommerce-selectors

## Taking the legwork out of finding the CSS Selectors to style your shop (**Last Update:** 19-05-2022 - 09:16)


## WooCommerce Pages 

Each page in WordPress has a user defined `slug`, an identifier for the page that defines the URL for a WooCommerce page. Examples below...


+ `/homepage/` - WooCommerce Shop Homepage
+ `/shop/` - WooCommerce Products Archive Page
+ `/basket/` - WooCommerce Basket
+ `/my-account/` - WooCommerce My Account
+ `/checkout/` - WooCommerce Checkout
+ `/product/` - Single Product Page (from archive page) 
+ `/privacy/` - WooCommerce Privacy Page


<a id="#document-navigation"></a>
## Document Navigation

Jump to the pages to view the selectors you need.

[Shoo Home](#shop-homepage) | [Shop Archive](#shop-archive-page) | [Basket](#woocommerce-basket-page) | [MyAccount](#woocommerce-myaccount-page) | [Checkout](#woocommerce-checkout-page) | [Single Product Page](#woocommerce-product-single)


<a id="shop-homepage"></a>
### Shop Homepage
+ https://www.url.com/homepage   [Top](#document-navigation)


```First, Look for the loop in your WordPress Template file.```

The loop then brings in content from the content editor of the page that is assigned by the WooCommerce plugin as the `homepage`. 

You then need to target the different blocks with their HTML Class Selectors.

e.g. 

  + `.wp-block-cover`
  + `.has-text-align-center`
  + `.wp-block-media-text`
  + `.wc-block-product-new`
  + `.wc-block-grid`
  + `.wc-block-product-new`
  + `.wc-block-featured-product` 

  
#### **Selectors to use...**  
```scss

// Editor Note:  Section Complete
.wp-block-cover {

    .wp-block-cover__gradient-background {

    }

    .wp-block-cover__image-background {

    }

    .wp-block-cover__inner-container {

        .has-text-color {

        }

        .wp-block-button {

            .wp-block-button__link {

            }

        }

    }

}


/* Section: New Products */
.has-text-align-center {

}



/* New Products Section Selectors */
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

            
            // product sale icon
            .wc-block-grid__product-onsale {

            }

            // product price selectors
            .wc-block-grid__product-price {

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

            // h2 element

        }
        
        .wc-block-featured-product__description {

            // p 
            p {

            }

        }
        
        .wc-block-featured-product__price {

            // price amount
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
+ https://www.cartoonchris.co.uk/shop/ (Product Archive Page)  [Top](#document-navigation)

As far as the shop archive page goes, the page is divided into 4 main structures.

+ header  ```(#header)```
+ primary ```(#primary)```
+ sidebar ```(#sidebar)```
+ footer ```(#footer)```


**HTML** 

```html

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

## SASS/CSS Selectors

```scss

// Editor Note:  op level Selectors for WooCommerce /shop/ page
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

## Shop Product Archive Page Selectors

```scss

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

                            // Add selected class to option element on orderby selection


                        }

                    } 

                }

            }

            .products {

                // products archive page - product list container element

                .type-product {

                    .woocommerce-LoopProduct-link {

                        // style selector for the sale icon when product has a sale price
                        .onsale {

                        }

                        .attachment-woocommerce_thumbnail {

                        }

                        .woocommerce-loop-product__title {

                        }

                        .price {

                            // standard price selectors - no sale/discount price
                            .woocommerce-Price-amount {

                                bdi {

                                    .woocommerce-Price-currencySymbol {
                                        
                                    }

                                }

                            }

                            // full price selectors (sale price)
                            del {
                                
                                .woocommerce-Price-amount {

                                    bdi {

                                        .woocommerce-Price-currencySymbol {

                                        }

                                    }

                                }

                            }

                            // selected for discounted/sale price
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

                        // Add to basket button selector


                    }

                }
                
            }

        }

    }

    #sidebar {

        // <ul> Author Information </ul>
        // <ul> pages list - role=navigation on ul element
        // <ul> ????


        // Author information and Search Form - Try using a first-child CSS Selector for 
        // ul elements that are children for the div element with an ID of #sidebar
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

            // ul role navigation -  - Sidebar pages navigation list
            li.pagenav {

                h2 {

                }

                ul {

                    .page-item {

                        // list item selector that contains an anchor tag for each page

                        a {

                        }
                        
                    }

                }

            }

            // No class selector for second list item - meant for the Sidebar archives list
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

            // Selector: Sidebar Categories list
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

        //div with id of footer - WooCommerce default state

        p {

            a {

            }

        }

    }

}

```



<a id="woocommerce-basket-page"></a>
### WooCommerce Basket
+ https://www.cartoonchris.co.uk/basket/ (Shop Basket Page) [Top](#document-navigation)

The Basket page is the first part of the shopping onboard process where items currently added to it will appear.



```scss

.woocommerce {

    a {

        .woocommerce-notices-wrapper {

        }

        .woocommerce-cart-form {

            .shop_table {
                
                thead {

                    tr {

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

                                    // remove button as an anchor element 
                                    // use a transition for background on hover state
                                }

                            }

                        }

                        .product-thumbnail {

                            a {

                                .attachment-woocommerce_thumbnail {

                                    // product thumbnail is an image element

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

                    }

                    // Form Basket Buttons  tr -> td
                    .actions {

                        // coupon text box and button element
                        .coupon {

                            label {

                            }

                            #coupon_code {

                            }

                            // Update Basket button
                            .button {

                            }

                        }

                        // Selector for the button that Updates the basket. No class or ID
                        button[type="submit"] {


                        }

                    }
            
                }  
                 
            }

        }   

    }

    .cart-collaterals {

        a {

        }

        .cart_totals {

            a {

                h2 {

                    // Basket Totals
                }

                .shop_table {

                    // Cart Collaterals Table  - table element
                    tbody {


                        // tr element
                        // Table Rows for Subtotal and Total Amounts
                        .cart-subtotal {

                            th {

                                // th subtotal
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

                                // th total
                            }

                            td {

                                .woocommerce-Price-amount {

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
+ https://www.cartoonchris.co.uk/my-account/ My Account Page ([Top](#document-navigation))



```scss


// TODO: Choose myaccount page selectors
.woocommerce {

    .woocommerce-MyAccount-navigation {

        ul {

            .woocommerce-MyAccount-navigation-link {

                a {

                }

            /* WooCommerce Navigation Classes */
            .woocommerce-MyAccount-navigation-link--dashboard 
            .woocommerce-MyAccount-navigation-link--orders
            .woocommerce-MyAccount-navigation-link--downloads
            .woocommerce-MyAccount-navigation-link--edit-address
            .woocommerce-MyAccount-navigation-link--edit-account
            .woocommerce-MyAccount-navigation-link--customer-logout

            // sass selector for the active tab
                & .is-active {


                }

            }

        }

    }

    .woocommerce-MyAccount-content {

        // TOOO: Content and tabs for myaccount page
        .woocommerce-notices-wrapper {

        }


        // Dashboard Tab
        p {

            strong {

            }

            // logout and other links
            a {

            }

        }

        // Orders Tab
        .woocommerce-message, .woocommerce-message--info, .woocommerce-Message .woocommerce-Message--info, .woocommerce-info {

        }

        //tick icon
        ..woocommerce-info::before {

            // Orders tab button - "browse products"
            a.woocommerce-Button button {

            }

        // 

        }


        // TODO: More Tabs

        
    }


}

```

<a id="woocommerce-checkout-page"></a>
### WooCommerce Checkout Page

+ https://www.cartoonchris.co.uk/checkout/ - Checkout Page ([Top](#document-navigation))

```scss
.woocommerce {

    .woocommerce-notices-wrapper {


    }

    .woocommerce-form-coupon-toggle {

        .woocommerce-info {

            // coupon toggle link
            .showcoupon {
                    
            }

        }

    }

    .checkout_coupon {


        // displayed when coupon toggle is open
        p {

        }

        .form-row-first {

            // contains coupon code text box
            .input-text {

            }

        }

        .form-row-seconde {

            // contains coupon button
            .button,
            button[type="submit"] {

            }            

        }

        .woocommerce-checkout {

            #customer_details {

                .col-1 {

                }

                .col-2 {

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

    }

}

```

<a id="woocommerce-product-single"></a>
### WooCommerce Single Product

+ https://www.cartoonchris.co.uk/product/ - Product Page  ([Top](#document-navigation))


```scss


// /product/  Single product page as clicked from shop archive page
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

    #primary {  // #primary  .content-area

        #main {

            .woocommerce-breadcrumb {

                a {

                }

            }

            .woocommerce-notices-wrapper {

            }

            .type-product {


                .onsale {
                    
                    // onsale span element for inclusion when there is a product sale

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

                // Use the entry summary classes
                .entry-summary {

                    // product details and basket customisations

                    .entry-title {

                        // product title per single product templates

                    }

                    .price {

                        // standard price selectors
                        .woocommerce-Price-amount {

                            bdi {

                                .woocommerce-Price-currencySymbol {

                                }

                            }

                        }

                        /* SALE PRICE */


                        // strikethrough full price
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

                }

            }

        }

    }

    #sidebar {

        // TODO: #sidebar - as per product archive page - ul containing element
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

            // ul role navigation -  - Sidebar pages navigation list
            li.pagenav {

                h2 {

                }

                ul {

                    .page-item {

                        // list item selector that contains an anchor tag for each page

                        a {

                        }
                        
                    }

                }

            }

            // No class selector for second list item - meant for the Sidebar archives list
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

            // Selector: Sidebar Categories list
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

        // TODO: as per product archive page
        p {

            a {

            }

        }
    
    }

}

```

[Top](#document-navigation)


