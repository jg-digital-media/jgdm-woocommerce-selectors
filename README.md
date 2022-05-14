# jgdm-woocommerce-selectors

## Taking the legwork out of finding the CSS Selectors to style your shop (**Last Update:** 14-05-2022 - 22:04)


## WooCommerce Pages 

Each page in WordPress has a user defined `slug`, an identifier for the page that defines the URL for a WooCommerce page. Examples below...


+ `/homepage/` - WooCommerce Shop Homepage
+ `/shop/` - WooCommerce Products Archive Page
+ `/my-account/` - WooCommerce My Account
+ `/basket/` - WooCommerce Basket
+ `/checkout/` - WooCommerce Checkout
+ `/privacy/` - WooCommerce Privacy Page


<a id="#document-navigation"></a>
## Document Navigation

Jump to the pages to view the selectors you need.

[Shoo Home](#shop-homepage) | [Shop Archive](#shop-archive-page) | [Basket](#woocommerce-basket-page) | [MyAccount](#woocommerce-myaccount-page) | [Checkout](#woocommerce-checkout-page) | [Single Product Page](#woocommerce-product-single)


<a id="shop-homepage"></a>
### Shop Homepage
+ https://www.url.com/homepage   [Top](#document-navigation)


```First, Look for the loop in your WordPress Template file.```

The loop then brings in content content editor of page assigned by the WooCommerce plugin as the `homepage`. 

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

.wp-block-cover {

    .wp-block-cover__gradient-background {

    }

    .wp-block-cover__image-background {

    }

    .wp-block-cover__inner-container{

        .wp-block-button {

            .wp-block-button__link {

            }

        }

    }

}

.has-text-align-center {

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


/* New products */
.wc-block-grid 
.wp-block-product-new {

    .wc-block-grid__products { 
        .wc-block-grid__product {
            a.wc-block-grid__product-link {
                .wc-block-grid__product-onsale {

                }

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

                .woocommerce-Price-amount {

                    .woocommerce-Price-currentSymbol {
                    }
                }
            }
        }
    }
}

// wc-block-grid
.wc-block-grid {

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
			
			.wc-block-grid__product-onsale {
				span {
					
				}
				.screen-reader-text {
					
				}
			}

			.wc-block-grid__product-price {
				
			}
		}
	}

}


                        
/*  Featured product wrapper */
.wc-block-featured-product {

    .wc-block-featured-product__wrapper {

        .wc-block-featured-product__title {}
        
        .wc-block-featured-product__description {}
        
        .wc-block-featured-product__price {}
        
        .wc-block-featured-product__link {}
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


Example

```html

<div id="page">   <!-- (#page) -->

    <div id="header"> . . . <div>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            . . . 
        
        </main>

    <div id="sidebar"> . . .  </div>

    <div id="footer"> . . . </div>


</div>

```

## Selectors

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

                // paragraph element - text-align: center

            }

            .woocommerce-ordering {

                .orderby {

                    option {

                        &.selected {


                        }

                    } 

                }

            }

            .products {

                .type-product {

                    .woocommerce-LoopProduct-link {

                        .attachment-woocommerce_thumbnail {

                        }

                        .woocommerce-loop-product__title {

                        }

                        .price {

                            .woocommerce-Price-amount {

                                bdi {
                                    .woocommerce-Price-currencySy
                                }

                                //sale price

                                del {

                                }

                                ins {
                                    .woocommerce-Price-amount {
                                        bdi {
                                            .woocommerce-Price-currencySymbol{

                                            }
                                        }
                                    }
                                }

                            }

                        }

                    }

                    .product_type_simple {

                    }
                }
                
            }


        }

    }

    #sidebar {

        // <ul> Author Information </ul>
        // <ul> pages list
        // <ul> ????


        // Author information and Search Form - Try using a first-child CSS Selector
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

            // ul role navigation - Sidebar pages navigation list
            li.pagenav {

                h2 {

                }

                ul {

                    .page-item {

                        a {

                        }
                        
                    }
                }

            }

            // no class ??  - meant for the Sidebar archives list
            li {
                
                ul {

                    li {

                        a {


                        }
                    }
                }
            }

            // Sidebar Categories list
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


```scss

.woocommerce {

    a {

        .woocomerce-notices-wrapper {

        }

        .woocommerce-cart-form {

            .shop_table {

                // TODO: 
                ...
            }
        }
    }

}

```

<a id="woocommewrce-myaccount-page"></a>

### WooCommerce MyAccount Page
+ https://www.cartoonchris.co.uk/my-account/ My Account Page ([Top](#document-navigation))



```scss
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

            // Orders tab button - "browse broducts"
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
.woocomerce {



}
```

<a id="woocommerce-product-single"></a>
### WooCommerce Single Product

+ https://www.cartoonchris.co.uk/product/ - Product Page  ([Top](#document-navigation))


```scss

.woocommerce {

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

                a {

                }

            }

            .woocommerce-notices-wrapper {

            }

            .type-product {

                .woocommerce-product-gallery {

                    .woocommerce-product-gallery__wrapper {

                        .woocommerce-product-gallery__image {

                            a {
                                .wp-post-image {

                                }

                            }

                        }

                    }

                }

            }
        }

    }

    #sidebar {

        // TODO: 

    }

    #footer {

        // TODO: 
    }




}
```

[Top](#document-navigation)


