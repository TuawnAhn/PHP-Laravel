/**
  * Select Image
  * Variant Picker
  * Custom Dropdown
  * Check Active
  * Color Swatch Product
  * Sidebar Mobile
  * Stagger Wrap
  * Modal Second
  * Estimate Shipping
  * Header Sticky
  * Auto Popup
  * Handle Progress
  * Total Price Variant
  * Scroll Grid Product
  * Hover Video
  * Change Value Dropdown
  * Button Loading
  * Item Checkbox
  * Handle Footer
  * Parallax
  * Infinite Slide
  * Button Quantity
  * Delete Item
  * Click Control
  * Tab Slide
  * Coppy Text
  * Wish List
  * Bottom Sticky
  * Handle Sidebar Filter
  * Cookie Setting
  * Preloader
  * Go Top

 */

(function ($) {
    "use strict";

    /* Select Image
    -------------------------------------------------------------------------------------*/
    var selectImages = function () {
        if ($(".image-select").length > 0) {
            const selectIMG = $(".image-select");

            selectIMG.find("option").each((idx, elem) => {
                const selectOption = $(elem);
                const imgURL = selectOption.attr("data-thumbnail");
                if (imgURL) {
                    selectOption.attr(
                        "data-content",
                        `<img src="${imgURL}" /> ${selectOption.text()}`
                    );
                }
            });
            selectIMG.selectpicker();
        }
    };

    /* Variant Picker
    -------------------------------------------------------------------------------------*/
    var variantPicker = function () {
        if ($(".variant-picker-item").length) {
            // variant color
            $(".color-btn").on("click", function (e) {
                var value = $(this).data("scroll");
                $(".value-currentColor").text(value);

                $(this)
                    .closest(".variant-picker-values")
                    .find(".color-btn")
                    .removeClass("active");
                $(this).addClass("active");
            });
            // variant size
            $(".size-btn").on("click", function (e) {
                var value = $(this).data("size");
                $(".value-currentSize").text(value);

                $(this)
                    .closest(".variant-picker-values")
                    .find(".size-btn")
                    .removeClass("active");
                $(this).addClass("active");
            });
        }
    };

    /* Custom Dropdown
    -------------------------------------------------------------------------*/
    var customDropdown = function () {
        function updateDropdownClass() {
            const $dropdown = $(".dropdown-custom");

            if ($(window).width() <= 991) {
                $dropdown.addClass("dropup").removeClass("dropend");
            } else {
                $dropdown.addClass("dropend").removeClass("dropup");
            }
        }
        updateDropdownClass();
        $(window).resize(updateDropdownClass);
    };

    /* Check Active
    -------------------------------------------------------------------------*/
    var checkClick = function () {
        $(".flat-check-list").on("click", ".check-item", function () {
            $(this)
                .closest(".flat-check-list")
                .find(".check-item")
                .removeClass("active");
            $(this).addClass("active");
        });
    };

    /* Color Swatch Product
    -------------------------------------------------------------------------*/
    var swatchColor = function () {
        if ($(".card-product").length > 0) {
            $(".color-swatch").on("click mouseover", function () {
                var swatchColor = $(this).find("img").attr("src");
                var imgProduct = $(this).closest(".card-product").find(".img-product");
                imgProduct.attr("src", swatchColor);
                $(this)
                    .closest(".card-product")
                    .find(".color-swatch.active")
                    .removeClass("active");

                $(this).addClass("active");
            });
        }
    };

    /* Sidebar Mobile
    -------------------------------------------------------------------------*/
    var sidebarMobile = function () {
        if ($(".sidebar-content-wrap").length > 0) {
            var sidebar = $(".sidebar-content-wrap").html();
            $(".sidebar-mobile-append").append(sidebar);
        }
    };

    /* Stagger Wrap
    -------------------------------------------------------------------------*/
    var staggerWrap = function () {
        if ($(".stagger-wrap").length) {
            var count = $(".stagger-item").length;
            for (var i = 1, time = 0.2; i <= count; i++) {
                $(".stagger-item:nth-child(" + i + ")")
                    .css("transition-delay", time * i + "s")
                    .addClass("stagger-finished");
            }
        }
    };

    /* Modal Second
    -------------------------------------------------------------------------*/
    var clickModalSecond = function () {
        $(".btn-quickview").on("click", function () {
            $("#quickView").modal("show");
        });
        $(".btn-compare").on("click", function () {
            $("#compare").modal("show");
        });
        $(".btn-atc").on("click", function () {
            $("#shoppingCart").modal("show");
        });
        $(".btn-add-gift").on("click", function () {
            $(".add-gift").addClass("open");
        });
        $(".btn-add-note").on("click", function () {
            $(".add-note").addClass("open");
        });
        $(".btn-coupon").on("click", function () {
            $(".coupon").addClass("open");
        });
        $(".btn-estimate-shipping").on("click", function () {
            $(".estimate-shipping").addClass("open");
        });
        $(".tf-mini-cart-tool-close").on("click", function () {
            $(".tf-mini-cart-tool-openable").removeClass("open");
        });
    };

    /* Estimate Shipping
    -------------------------------------------------------------------------*/
    var estimateShipping = function () {
        if ($(".estimate-shipping").length) {
            const countrySelect = document.getElementById("shipping-country-form");
            const provinceSelect = document.getElementById("shipping-province-form");
            const zipcodeInput = document.getElementById("zipcode");
            const zipcodeMessage = document.getElementById("zipcode-message");
            const zipcodeSuccess = document.getElementById("zipcode-success");

            function updateProvinces() {
                const selectedCountry = countrySelect.value;
                const selectedOption =
                    countrySelect.options[countrySelect.selectedIndex];
                const provincesData = selectedOption.getAttribute("data-provinces");

                const provinces = JSON.parse(provincesData);

                provinceSelect.innerHTML = "";

                if (provinces.length === 0) {
                    const option = document.createElement("option");
                    option.textContent = "------";
                    provinceSelect.appendChild(option);
                } else {
                    provinces.forEach((province) => {
                        const option = document.createElement("option");
                        option.value = province[0];
                        option.textContent = province[1];
                        provinceSelect.appendChild(option);
                    });
                }
            }

            countrySelect.addEventListener("change", updateProvinces);

            function validateZipcode(zipcode, country) {
                let regex;

                switch (country) {
                    case "Australia":
                        regex = /^\d{4}$/;
                        break;
                    case "Austria":
                        regex = /^\d{4}$/;
                        break;
                    case "Belgium":
                        regex = /^\d{4}$/;
                        break;
                    case "Canada":
                        regex = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
                        break;
                    case "Czech Republic":
                        regex = /^\d{5}$/;
                        break;
                    case "Denmark":
                        regex = /^\d{4}$/;
                        break;
                    case "Finland":
                        regex = /^\d{5}$/;
                        break;
                    case "France":
                        regex = /^\d{5}$/;
                        break;
                    case "Germany":
                        regex = /^\d{5}$/;
                        break;
                    case "United States":
                        regex = /^\d{5}(-\d{4})?$/;
                        break;
                    case "United Kingdom":
                        regex = /^[A-Za-z]{1,2}\d[A-Za-z\d]? \d[A-Za-z]{2}$/;
                        break;
                    case "India":
                        regex = /^\d{6}$/;
                        break;
                    case "Japan":
                        regex = /^\d{3}-\d{4}$/;
                        break;
                    case "Mexico":
                        regex = /^\d{5}$/;
                        break;
                    case "South Korea":
                        regex = /^\d{5}$/;
                        break;
                    case "Spain":
                        regex = /^\d{5}$/;
                        break;
                    case "Italy":
                        regex = /^\d{5}$/;
                        break;
                    case "Vietnam":
                        regex = /^\d{6}$/;
                        break;
                    default:
                        return true;
                }

                return regex.test(zipcode);
            }

            document
                .getElementById("shipping-form")
                .addEventListener("submit", function (event) {
                    const zipcode = zipcodeInput.value.trim();
                    const country = countrySelect.value;

                    if (!validateZipcode(zipcode, country)) {
                        zipcodeMessage.style.display = "block";
                        zipcodeSuccess.style.display = "none";
                        event.preventDefault();
                    } else {
                        zipcodeMessage.style.display = "none";
                        zipcodeSuccess.style.display = "block";
                        event.preventDefault();
                    }
                });

            window.onload = updateProvinces;
        }
    };

    /* Header Sticky
    -------------------------------------------------------------------------*/
    var headerSticky = function () {
        let lastScrollTop = 0;
        let delta = 5;
        let navbarHeight = $("header").outerHeight();
        let didScroll = false;

        $(window).scroll(function () {
            didScroll = true;
        });

        setInterval(function () {
            if (didScroll) {
                let st = $(window).scrollTop();
                navbarHeight = $("header").outerHeight();

                if (st > navbarHeight) {
                    if (st > lastScrollTop + delta) {
                        $("header").css("top", `-${navbarHeight}px`);
                    } else if (st < lastScrollTop - delta) {
                        $("header").css("top", "0");
                        $("header").addClass("header-bg");
                    }
                } else {
                    $("header").css("top", "unset");
                    $("header").removeClass("header-bg");
                }
                lastScrollTop = st;
                didScroll = false;
            }
        }, 250);
    };

    /* Auto Popup
    ------------------------------------------------------------------------------------- */
    var autoPopup = function () {
        if ($(".auto-popup").length > 0) {
            let pageKey = "showPopup_" + window.location.pathname;
            let showPopup = sessionStorage.getItem(pageKey);

            if (!JSON.parse(showPopup)) {
                setTimeout(function () {
                    $(".auto-popup").modal("show");
                }, 3000);
            }

            $(".btn-hide-popup").on("click", function () {
                sessionStorage.setItem(pageKey, true);
            });
        }
    };

    /* Handle Progress
    ------------------------------------------------------------------------------------- */
    var handleProgress = function () {
        if ($(".progress-sold").length > 0) {
            var progressValue = $(".progress-sold .value").data("progress");
            setTimeout(function () {
                $(".progress-sold .value").css("width", progressValue + "%");
            }, 800);
        }

        function handleProgressBar(showEvent, hideEvent, target) {
            $(target).on(hideEvent, function () {
                $(".tf-progress-bar .value").css("width", "0%");
            });

            $(target).on(showEvent, function () {
                setTimeout(function () {
                    var progressValue = $(".tf-progress-bar .value").data("progress");
                    $(".tf-progress-bar .value").css("width", progressValue + "%");
                }, 600);
            });
        }

        if ($(".popup-shopping-cart").length > 0) {
            handleProgressBar("show.bs.offcanvas", "hide.bs.offcanvas", ".popup-shopping-cart");
        }

        if ($(".popup-shopping-cart").length > 0) {
            handleProgressBar("show.bs.modal", "hide.bs.modal", ".popup-shopping-cart");
        }
    };

    /* Total Price Variant
    ------------------------------------------------------------------------------------- */
    var totalPriceVariant = function () {
        $(".tf-product-info-list,.tf-cart-item").each(function () {
            var productItem = $(this);
            var basePrice =
                parseFloat(productItem.find(".price-on-sale").data("base-price")) ||
                parseFloat(productItem.find(".price-on-sale").text().replace(" VNĐ", "").replace(/\./g, ""));
            var quantityInput = productItem.find(".quantity-product");

            productItem.find(".color-btn, .size-btn").on("click", function () {
                var newPrice = parseFloat($(this).data("price")) || basePrice;
                quantityInput.val(1);
                productItem
                    .find(".price-on-sale")
                    .text(newPrice.toLocaleString('vi-VN') + " VNĐ");
                updateTotalPrice(newPrice, productItem);
            });

            productItem.find(".btn-increase").on("click", function () {
                var currentQuantity = parseInt(quantityInput.val(), 10);
                quantityInput.val(currentQuantity + 1);
                updateTotalPrice(null, productItem);
            });

            productItem.find(".btn-decrease").on("click", function () {
                var currentQuantity = parseInt(quantityInput.val(), 10);
                if (currentQuantity > 1) {
                    quantityInput.val(currentQuantity - 1);
                    updateTotalPrice(null, productItem);
                }
            });

            function updateTotalPrice(price, scope) {
                var currentPrice =
                    price ||
                    parseFloat(scope.find(".price-on-sale").text().replace(" VNĐ", "").replace(/\./g, ""));
                var quantity = parseInt(scope.find(".quantity-product").val(), 10);
                var totalPrice = currentPrice * quantity;
                scope
                    .find(".total-price")
                    .text(totalPrice.toLocaleString('vi-VN') + " VNĐ");
            }
        });
    };

    var updateBundleTotal = function () {
        var $bundleItems = $(".tf-bundle-product-item");
        var totalPrice = 0;
        var totalPriceOld = 0;

        $bundleItems.each(function () {
            var $this = $(this);
            var isChecked = $this.find(".tf-check").prop("checked");

            if (isChecked) {
                var newPrice = parseFloat(
                    $this.find(".new-price").text().replace(" VNĐ", "").replace(/\./g, "")
                );
                var oldPrice = parseFloat(
                    $this.find(".old-price").text().replace(" VNĐ", "").replace(/\./g, "") || 0
                );

                totalPrice += newPrice;
                totalPriceOld += oldPrice || newPrice;
            }
        });

        $(".total-price").text(totalPrice.toLocaleString('vi-VN') + " VNĐ");
        $(".total-price-old").text(totalPriceOld.toLocaleString('vi-VN') + " VNĐ");
    };

    var initBundleFunctionality = function () {
        var $firstCheck = $(".tf-bundle-product-item").first().find(".tf-check");
        $firstCheck.prop("checked", true).prop("disabled", true);
        updateBundleTotal();
        $(".tf-check").on("change", function () {
            updateBundleTotal();
        });
    };





    /* Scroll Grid Product
    ------------------------------------------------------------------------------------- */
    var scrollGridProduct = function () {
        var scrollContainer = $(".wrapper-gallery-scroll");
        var activescrollBtn = null;
        var offsetTolerance = 20;

        function isHorizontalMode() {
            return window.innerWidth <= 767;
        }

        function getTargetScroll(target, isHorizontal) {
            if (isHorizontal) {
                return (
                    target.offset().left -
                    scrollContainer.offset().left +
                    scrollContainer.scrollLeft()
                );
            } else {
                return (
                    target.offset().top -
                    scrollContainer.offset().top +
                    scrollContainer.scrollTop()
                );
            }
        }

        $(".btn-scroll-target").on("click", function () {
            var scroll = $(this).data("scroll");
            var target = $(".item-scroll-target[data-scroll='" + scroll + "']");

            if (target.length > 0) {
                var isHorizontal = isHorizontalMode();
                var targetScroll = getTargetScroll(target, isHorizontal);

                if (isHorizontal) {
                    scrollContainer.animate({ scrollLeft: targetScroll }, 600);
                } else {
                    $("html, body").animate({ scrollTop: targetScroll }, 100);
                }

                $(".btn-scroll-target").removeClass("active");
                $(this).addClass("active");
                activescrollBtn = $(this);
            }
        });

        $(window).on("scroll", function () {
            var isHorizontal = isHorizontalMode();
            $(".item-scroll-target").each(function () {
                var target = $(this);
                var targetScroll = getTargetScroll(target, isHorizontal);

                if (isHorizontal) {
                    if (
                        $(window).scrollLeft() >= targetScroll - offsetTolerance &&
                        $(window).scrollLeft() <= targetScroll + target.outerWidth()
                    ) {
                        $(".btn-scroll-target").removeClass("active");
                        $(
                            ".btn-scroll-target[data-scroll='" + target.data("scroll") + "']"
                        ).addClass("active");
                    }
                } else {
                    if (
                        $(window).scrollTop() >= targetScroll - offsetTolerance &&
                        $(window).scrollTop() <= targetScroll + target.outerHeight()
                    ) {
                        $(".btn-scroll-target").removeClass("active");
                        $(
                            ".btn-scroll-target[data-scroll='" + target.data("scroll") + "']"
                        ).addClass("active");
                    }
                }
            });
        });
    };

    /* Change Value Dropdown
    ------------------------------------------------------------------------------------- */
    var changeValueDropdown = function () {
        if ($(".tf-dropdown").length > 0) {
            $(".select-item").on("click", function (event) {
                $(this)
                    .closest(".tf-dropdown")
                    .find(".text-sort-value")
                    .text($(this).find(".text-value-item").text());

                $(this)
                    .closest(".dropdown-menu")
                    .find(".select-item.active")
                    .removeClass("active");

                $(this).addClass("active");
            });
        }
    };

    /* Button Loading
    -------------------------------------------------------------------------*/
    var btnLoading = function () {
        if ($(".tf-loading").length) {
            $(".tf-loading").on("click", function (e) {
                $(this).addClass("loading");
                var $this = $(this);
                setTimeout(function () {
                    $this.removeClass("loading");
                }, 600);
            });
        }
    };

    /* Item Checkbox
    -------------------------------------------------------------------------*/
    var itemCheckbox = function () {
        if ($(".item-has-checkbox").length) {
            $(".item-has-checkbox input:checkbox").on("click", function (e) {
                $(this).closest(".item-has-checkbox").toggleClass("check");
            });
        }
    };

    /* Handle Footer
    -------------------------------------------------------------------------*/
    var handleFooter = function () {
        var footerAccordion = function () {
            var args = { duration: 250 };
            $(".footer-heading-mobile").on("click", function () {
                $(this).parent(".footer-col-block").toggleClass("open");
                if (!$(this).parent(".footer-col-block").is(".open")) {
                    $(this).next().slideUp(args);
                } else {
                    $(this).next().slideDown(args);
                }
            });
        };
        function handleAccordion() {
            if (matchMedia("only screen and (max-width: 575px)").matches) {
                if (!$(".footer-heading-mobile").data("accordion-initialized")) {
                    footerAccordion();
                    $(".footer-heading-mobile").data("accordion-initialized", true);
                }
            } else {
                $(".footer-heading-mobile").off("click");
                $(".footer-heading-mobile")
                    .parent(".footer-col-block")
                    .removeClass("open");
                $(".footer-heading-mobile").next().removeAttr("style");
                $(".footer-heading-mobile").data("accordion-initialized", false);
            }
        }
        handleAccordion();
        window.addEventListener("resize", function () {
            handleAccordion();
        });
    };

    /* Parallax
    ----------------------------------------------------------------------------*/
    var efectParalax = function () {
        if ($(".effect-paralax").length > 0) {
            $(".effect-paralax").each(function () {
                new SimpleParallax(this, {
                    delay: 0.5,
                    orientation: "up",
                    scale: 1.3,
                    transition: "cubic-bezier(0.2, 0.8, 1, 1)",
                    customContainer: "",
                    customWrapper: "",
                });
            });
        }
    };

    /* Parallaxie js
    -------------------------------------------------------------------------------------*/

    var parallaxie = function () {
        var $window = $(window);
        if ($(".parallaxie").length && $window.width() > 991) {
            if ($window.width() > 768) {
                $(".parallaxie").parallaxie({
                    speed: 0.55,
                    offset: 0,
                });
            }
        }
    };

    /* Infinite Slide
    ----------------------------------------------------------------------------*/
    var infiniteSlide = function () {
        if ($(".infiniteslide").length > 0) {
            $(".infiniteslide").each(function () {
                var $this = $(this);
                var style = $this.data("style") || "left";
                var clone = $this.data("clone") || 2;
                var speed = $this.data("speed") || 100;
                $this.infiniteslide({
                    speed: speed,
                    direction: style,
                    clone: clone,
                });
            });
        }
    };

    /* Button Quantity
    ----------------------------------------------------------------------------*/
    var btnQuantity = function () {
        $(".minus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val(), 10);

            if (value > 1) {
                value = value - 1;
            }
            $input.val(value);
        });

        $(".plus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val(), 10);

            if (value > -1) {
                value = value + 1;
            }
            $input.val(value);
        });
    };

    /* Delete compare
    ----------------------------------------------------------------------------*/
    var deleteCompare = function () {
        function checkEmpty() {
            var $compareInner = $(".tf-compare-inner");
            if ($(".list-file-delete .file-delete").length === 0) {
                $(".tf-compare-buttons").hide();
                if ($compareInner.find(".tf-compare-empty").length === 0) {
                    $compareInner.append(`
                    <div class="tf-compare-empty text-center">
                        <p class="text-lg fw-medium text-main">Compare list is empty</p>
                    </div>
                `);
                }
            } else {
                $(".tf-compare-buttons").show();
                $compareInner.find(".tf-compare-empty").remove();
            }
        }

        $(".remove").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest(".file-delete").remove();
            checkEmpty();
        });

        $(".clear-file-delete").on("click", function (e) {
            e.preventDefault();
            $(this).closest(".list-file-delete").find(".file-delete").remove();
            checkEmpty();
        });
    };

    /* Delete wishlist
    ----------------------------------------------------------------------------*/
    var deleteWishList = function () {
        function checkEmpty() {
            var $wishlistInner = $(".wrapper-wishlist");
            var productCount = $(".wrapper-wishlist .card-product").length;

            if (productCount <= 8) {
                $("wrapper-wishlist .wg-pagination").hide();
            } else {
                $("wrapper-wishlist .wg-pagination").show();
            }

            if (productCount === 0) {
                $wishlistInner.append(`
          <div class="tf-wishlist-empty text-center">
            <p class="text-md text-noti">No product were added to the wishlist.</p>
            <a href="index.html" class="tf-btn animate-btn btn-back-shop">Back to Shopping</a>
          </div>
        `);
            } else {
                $wishlistInner.find(".tf-compare-empty").remove();
            }
        }

        $(".remove").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest(".card-product").remove();
            checkEmpty();
        });

        checkEmpty();
    };


    /* Click Control
    ------------------------------------------------------------------------------------- */
    var clickControl = function () {
        $(".btn-add-address").on("click", function () {
            $(".show-form-address").toggle();
        });
        $(".btn-hide-address").on("click", function () {
            $(".show-form-address").hide();
        });
        $(".btn-delete-address").on("click", function () {
            $(this).closest(".account-address-item").remove();
            var item = $(this).closest(".account-address-item");
            if (item.hasClass("editing")) {
                $(".edit-form-address").toggle();
                $(".edit-form-address").toggleClass("show");
            }
        });

        $(".btn-edit-address").on("click", function (e) {
            var item = $(this).closest(".account-address-item");
            if ($(".edit-form-address").hasClass("show")) {
                if (item.hasClass("editing")) {
                    $(".edit-form-address").toggle();
                    $(".edit-form-address").toggleClass("show");
                    $(".account-address-item").removeClass("editing");
                } else {
                    $(".account-address-item").removeClass("editing");
                    item.addClass("editing");
                }
            } else {
                $(".edit-form-address").toggle();
                $(".edit-form-address").toggleClass("show");
                $(this).closest(".account-address-item").toggleClass("editing");
            }
        });
        $(".btn-hide-edit-address").on("click", function () {
            $(".edit-form-address").hide();
            $(".edit-form-address").removeClass("show");
            $(".account-address-item").removeClass("editing");
        });
    };

    /* Tab Slide
    ------------------------------------------------------------------------------------- */
    var tabSlide = function () {
        if ($(".tab-slide").length > 0) {
            function updateTabSlide() {
                var $activeTab = $(".tab-slide li.active");
                if ($activeTab.length > 0) {
                    var $width = $activeTab.width();
                    var $left = $activeTab.position().left;
                    var sideEffect = $activeTab.parent().find(".item-slide-effect");
                    $(sideEffect).css({
                        width: $width,
                        transform: "translateX(" + $left + "px)",
                    });
                }
            }
            $(".tab-slide li").on("click", function () {
                var itemTab = $(this).parent().find("li");
                $(itemTab).removeClass("active");
                $(this).addClass("active");

                var $width = $(this).width();
                var $left = $(this).position().left;
                var sideEffect = $(this).parent().find(".item-slide-effect");
                $(sideEffect).css({
                    width: $width,
                    transform: "translateX(" + $left + "px)",
                });
            });

            $(window).on("resize", function () {
                updateTabSlide();
            });

            updateTabSlide();
        }
    };

    /* Coppy Text
    ------------------------------------------------------------------------------------- */
    var coppyText = function () {
        $("#btn-coppy-text").on("click", function () {
            var text = document.getElementById("coppyText");

            var coppy = document.createRange();
            coppy.selectNode(text);

            window.getSelection().removeAllRanges();
            window.getSelection().addRange(coppy);

            try {
                document.execCommand("copy");
                alert("Text copied: " + text.innerText);
            } catch (err) {
                alert("Failed to copy text: " + err);
            }

            window.getSelection().removeAllRanges();
        });
    };

    /* Wish List
    ------------------------------------------------------------------------------------- */
    var wishList = function () {
        $(".btn-add-wishlist").on("click", function () {
            $(this).toggleClass("added-wishlist");
        });
        $(".card-product .wishlist").on("click", function () {
            $(this).toggleClass("addwishlist");

            let icon = $(this).find(".icon");
            let tooltip = $(this).find(".tooltip");

            if ($(this).hasClass("addwishlist")) {
                icon.removeClass("icon-heart2").addClass("icon-trash");
                tooltip.text("Remove Wishlist");
            } else {
                icon.removeClass("icon-trash").addClass("icon-heart2");
                tooltip.text("Add to Wishlist");
            }
        });
    };

    /* Bottom Sticky
    --------------------------------------------------------------------------------------*/
    var scrollBottomSticky = function () {
        $(window).on("scroll", function () {
            var scrollPosition = $(this).scrollTop();
            var myElement = $(".tf-sticky-btn-atc");

            if (scrollPosition >= 500) {
                myElement.addClass("show");
            } else {
                myElement.removeClass("show");
            }
        });
    };

    /* Handle Sidebar Filter
    -------------------------------------------------------------------------------------*/
    var handleSidebarFilter = function () {
        $("#filterShop,.sidebar-btn").on("click", function () {
            if ($(window).width() <= 1200) {
                $(".sidebar-filter,.overlay-filter").addClass("show");
            }
        });
        $(".close-filter,.overlay-filter").on("click", function () {
            $(".sidebar-filter,.overlay-filter").removeClass("show");
        });
    };

    /* Cookie Setting
    -------------------------------------------------------------------------------------*/
    var cookieSetting = function () {
        $(".cookie-banner .overplay").on("click", function () {
            $(".cookie-banner").hide();
        });

        function setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            const expires = "expires=" + date.toUTCString();
            document.cookie = `${name}=${value}; ${expires}; path=/`;
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const cookies = document.cookie.split(";");
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();
                if (cookie.indexOf(nameEQ) === 0) {
                    return cookie.substring(nameEQ.length, cookie.length);
                }
            }
            return null;
        }

        function checkCookie() {
            const $cookieBanner = $("#cookie-banner");
            const accepted = getCookie("cookieAccepted");

            if (accepted) {
                $cookieBanner.hide();
            } else {
                $cookieBanner.show();
            }
        }

        $(document).ready(function () {
            $("#accept-cookie").on("click", function () {
                setCookie("cookieAccepted", "true", 30);
                $("#cookie-banner").hide();
            });

            checkCookie();
        });
    };

    /* Postion Navigation Centered
    -------------------------------------------------------------------------------------*/
    var posNavSwiper = function () {
        $(".wrap-pos-nav").each(function () {
            var imageBlog = $(this).find(".news-item .image-box");
            if (imageBlog.length) {
                var contentHeight = $(this).find(".news-item .content").outerHeight();
                var newTop = `calc(50% - ${contentHeight / 2}px)`;
                $(this).find(".nav-swiper").css("top", newTop);
            }
            var imageProduct = $(this).find(".card-product .card-product-wrapper");
            if (imageProduct.length) {
                var contentHeight = $(this).find(".card-product .card-product-info").outerHeight();
                var newTop = `calc(50% - ${contentHeight / 2}px)`;
                $(this).find(".nav-swiper").css("top", newTop);
            }
        });

    }

    /* Block Form
    -------------------------------------------------------------------------------------*/
    var blockForm = function () {
        $(".form-newsletter").submit(function (e) {
            e.preventDefault();
            location.reload();
        });
    };

    /* Check Input Discount
    -------------------------------------------------------------------------------------*/
    var handleResultIP = function () {
        $(".box-ip-discount button").on("click", function (e) {
            e.preventDefault();
            $(".box-ip-discount .discount-message").remove();
            var discountCode = $(".box-ip-discount .value-discount").val().trim();
            if (discountCode === "") {
                $(".box-ip-discount").append('<div class="discount-message text-sm error">Please enter a discount code.</div>');
            } else {
                $(".box-ip-discount").append('<div class="discount-message text-sm success">Discount code applied successfully!</div>');
            }
            $(".discount-message").hide().fadeIn(300);
        })
        $(".shipping-cart-box button").on("click", function (e) {
            e.preventDefault();

            $(".shipping-message").remove();

            var country = $(".shipping-cart-box #country").val().trim();
            var state = $(".shipping-cart-box #state").val().trim();
            var zipcode = $(".shipping-cart-box #code").val().trim();

            if (country === "" || state === "" || zipcode === "") {
                $(".shipping-cart-box").append(
                    '<div class="shipping-message text-sm error">Please enter all required shipping details.</div>'
                );
            } else {
                $(".shipping-cart-box").append(
                    '<div class="shipping-message text-sm success">Shipping estimate applied successfully!</div>'
                );
            }

            $(".shipping-message").hide().fadeIn(300);
        });
        $(".feedback-box button").on("click", function (e) {
            e.preventDefault();

            $(".feedback-message").remove();

            var country = $(".feedback-box #name").val().trim();
            var state = $(".feedback-box #email").val().trim();
            var zipcode = $(".feedback-box #desc").val().trim();

            if (country === "" || state === "" || zipcode === "") {
                $(".feedback-box").append(
                    '<div class="feedback-message text-sm error">Please enter all required feedback</div>'
                );
            } else {
                $(".feedback-box").append(
                    '<div class="feedback-message text-sm success">Feedback applied successfully!</div>'
                );
            }

            $(".feedback-message").hide().fadeIn(300);
        });
    };

    /* Preloader
    -------------------------------------------------------------------------------------*/
    var preloader = function () {
        setTimeout(function () {
            $(".preload").fadeOut("slow", function () {
                $(this).remove();
            });
        }, 300);
    };

    /* Go Top
    -------------------------------------------------------------------------------------*/
    var goTop = function () {
        var $goTop = $("#goTop");
        var $borderProgress = $(".border-progress");

        $(window).on("scroll", function () {
            var scrollTop = $(window).scrollTop();
            var docHeight = $(document).height() - $(window).height();
            var scrollPercent = (scrollTop / docHeight) * 100;
            var progressAngle = (scrollPercent / 100) * 360;

            $borderProgress.css("--progress-angle", progressAngle + "deg");

            if (scrollTop > 100) {
                $goTop.addClass("show");
            } else {
                $goTop.removeClass("show");
            }
        });

        $goTop.on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 0);
        });
    };

    // removecompare
    var removecompare = function () {
        $(".tf-compare-remove").on("click", function () {

        });
    }

    // Dom Ready
    $(function () {
        selectImages();
        variantPicker();
        customDropdown();
        checkClick();
        swatchColor();
        sidebarMobile();
        staggerWrap();
        clickModalSecond();
        estimateShipping();
        headerSticky();
        autoPopup();
        handleProgress();
        totalPriceVariant();
        initBundleFunctionality();
        scrollGridProduct();
        changeValueDropdown();
        btnLoading();
        itemCheckbox();
        handleFooter();
        efectParalax();
        parallaxie();
        infiniteSlide();
        btnQuantity();
        deleteCompare();
        deleteWishList();
        clickControl();
        tabSlide();
        coppyText();
        wishList();
        scrollBottomSticky();
        handleSidebarFilter();
        cookieSetting();
        posNavSwiper();
        blockForm();
        handleResultIP();
        removecompare();
        preloader();
        goTop();
        new WOW().init();

    });
})(jQuery);
