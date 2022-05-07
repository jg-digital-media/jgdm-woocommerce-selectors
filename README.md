# jgdm-woocommerce-selectors

## Taking the legwork out of finding the CSS Selectors to style your shop (**Last Update:** 06-05-2022 - 22:16)


## WooCommerce Pages 


+ https://www.cartoonchris.co.uk/shop/ - Products/Archive Page
+ https://www.cartoonchris.co.uk/my-account/  - My Account
+ https://www.cartoonchris.co.uk/homepage/ - Shop Homepage
+ https://www.cartoonchris.co.uk/basket/ - Basket
+ https://www.cartoonchris.co.uk/checkout/ - Checkout
+ https://www.cartoonchris.co.uk/privacy-policy/ - Privacy Link


+ https://www.cartoonchris.co.uk/homepage/ (Shop homepage)



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

+ https://www.cartoonchris.co.uk/my-account/ (My Account Page)

+ https://www.cartoonchris.co.uk/checkout/ (Checkout Page)

+ https://www.cartoonchris.co.uk/product/ (Product Page)


