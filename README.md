# jgdm-woocommerce-selectors

## Taking the legwork out of finding the CSS Selectors to style your shop (**Last Update:** 10-05-2022 - 16:59)


## WooCommerce Pages 


+ https://www.url.com/shop/ - Products/Archive Page
+ https://www.url.com/my-account/  - My Account
+ https://www.url.com/homepage/ - Shop Homepage
+ https://www.url.com/basket/ - Basket
+ https://www.url.com/checkout/ - Checkout
+ https://www.url.com/privacy-policy/ - Privacy Link

Where url.com is the domain and /shop is the page "slug" or identifier.

## Nav 

[Home](#home) | [Shop Archive](#productarchive) | Basket | MyAccount | Checkout | Single Product Page

+ https://www.url.com/homepage  

<a name="#home"></a>
### Shop Homepage


```Look for the loop in your WordPress Template file.```

The loop then brings in content content editor of page assigned by the WooCommerce plugin as the `homepage`. 

You then need to target the different blocks with their HTML Class Selectors.

e.g. 

  + `.wp-block-cover`
  + `.wp-block-media-text`
  + `.wc-block-featured-product` 



  
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
<a name="#productarchive"></a>
+ https://www.cartoonchris.co.uk/shop/ (Product Archive Page)

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

```css

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

            }

            .woocommerce-ordering {

                .orderby {

                    option {

                    } 

                }

            }

            .products {
                
            }


        }

    }

    #sidebar {

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

            li.pagenav {

                h2 {

                }

            }

            li.categories {

            }
        }

    }

    #footer {

    }
}
```


+ https://www.cartoonchris.co.uk/basket/ (Shop Basket/Cart)


```scss

.woocommerce {

}

```

+ https://www.cartoonchris.co.uk/my-account/ (My Account Page)

## MyAccount Page

```scss
.woocommerce {


}
```


+ https://www.cartoonchris.co.uk/checkout/ (Checkout Page)

```scss
.woocomerce {



}
```

+ https://www.cartoonchris.co.uk/product/ (Product Page)


```scss

.woocommerce {


}
```

