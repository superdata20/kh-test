<?php
require_once "inc/header.php";
?>
<main class="c-page">
    <section class="c-hero-section">
        <div class="c-container">
            <div class="c-hero">
                <div class="c-hero_copy cc-hero-text">
                    <div class="c-title-wrapper cc-homepage">
                        <h1 class="c-title-2">Your all-in-one<br><span class="cc-mint-3 cc-mobile-hero">rental platform</span>
                            <strong></strong>
                        </h1>
                    </div>
                    <div class="c-hero-sub cc-wrapper cc-sub-text">
                        <p class="c-title-4">From Tenant Screening to Rent Payment, KeyHolder provides the tools for every step of the process</p>
                    </div>
                    <div class="c-cta">
                        <a href="https://app.keyholder.ie/sign-up" class="c-button cc-white cc-semi-bold cc-tablet_blue cc-hero w-inline-block">
                            <div>Get Started</div>
                        </a>
                    </div>
                </div>
                <div class="c-hero_shape w-embed">
                    <svg width="1469" height="100%" viewBox="0 0 1469 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0L675.887 675.887C708.038 708.038 760.165 708.038 792.316 675.887L1468.2 0H0Z" fill="url(#paint0_linear_319_36)" />
                        <defs>
                            <linearGradient id="paint0_linear_319_36" x1="105.537" y1="193.417" x2="1571" y2="193.417" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#004BB0" />
                                <stop offset="1" stop-color="#007ADF" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="c-hero_lottie-wrap">
                    <?php
                    /*
                    <div class="c-hero_lottie" data-animation-type="lottie" data-src="/assets/js/9_Web_ Home_Pg_Hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="8" data-duration="0"></div>
                    */
                    ?>
                    <div class="c-hero_lottie">
                        <img src="/assets/images/romb.png"  style="margin-top: 150px;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-hero_background">
            <img src="/assets/images/HomePg_Neighbor_Bg-img.png" loading="eager" height="733" width="1440" sizes="(max-width: 991px) 100vw, 1440px" srcset="/assets/images/HomePg_Neighbor_Bg-img-p-500.png 500w,/assets/images/HomePg_Neighbor_Bg-img-p-800.png 800w,/assets/images/HomePg_Neighbor_Bg-img.png 2880w" alt="neighbourhood illustration | KeyHolder" class="c-hero_background-image" />
        </div>
    </section>
    <section class="c-section cc-tabs">
        <div class="c-container">
            <div class="c-title-wrapper cc-centered cc-mobile_30ch">
                <h2 class="c-title-2">
                    <strong>The</strong>
                    <span class="cc-gradient-blue-2 cc-clip-text">KeyHolder </span>platform
                </h2>
            </div>
            <div class="c-tabs">
                <div class="c-tabs_nav">
                    <div class="c-tabs_nav-list-wrapper w-dyn-list">
                        <div r-tabs-interaction="click" r-cms-tabs="list" role="list" class="c-tabs_nav-list w-dyn-items">
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">Rent Estimate</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_Rent-Estimate.png" alt="Rent Estimate" sizes="(max-width: 479px) 100vw, (max-width: 991px) 395px, 604px" srcset="/assets/images/Web_HomePg_Features_Rent-Estimate-p-800.png 800w,/assets/images/Web_HomePg_Features_Rent-Estimate.png 1208w" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3">Rent Estimate</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">Our custom Rent Estimate report provides a robust rent analysis and rent estimate for you to price your rentals with confidence. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/rent-estimate" aria-label="Learn more about Rent Estimate">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">Rental Application</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_Rental-App.png" alt="Rental Application" sizes="(max-width: 479px) 100vw, (max-width: 991px) 395px, 604px" srcset="/assets/images/Web_HomePg_Features_Rental-App-p-800.png 800w,/assets/images/Web_HomePg_Features_Rental-App.png 1208w" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3"> Rental Application</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">Our free online application form helps you get all the information you need to choose the best tenants for your properties. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/rental-application" aria-label="Learn more about Rental Application">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">Tenant Screening</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_Screening.png" alt="Tenant Screening" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3"> Tenant Screening</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">Screen with confidence with comprehensive credit reports, rental history, and tenant background checks issued by trusted credit bureau TransUnion. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/tenant-screening" aria-label="Learn more about Tenant Screening">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">E-Sign Documents</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_E-sign.png" alt="E-Sign Documents" sizes="(max-width: 479px) 100vw, (max-width: 991px) 395px, 604px" srcset="/assets/images/Web_HomePg_Features_E-sign-p-800.png 800w,/assets/images/Web_HomePg_Features_E-sign.png 1208w" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3"> E-Sign Documents</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">Faster than paper. Safely send, sign, share and store rental documents online. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/electronic-signature" aria-label="Learn more about E-Sign Documents">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">Renters Insurance</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_Renter-Insurance.png" alt="Renters Insurance" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3"> Renters Insurance</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">We make it easy for tenants to submit proof of insurance and for you to verify their coverage. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/renters-insurance" aria-label="Learn more about Renters Insurance">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="c-tabs_nav-item w-dyn-item">
                                <a aria-haspopup="listbox" aria-label="Tab trigger" href="#" class="c-tabs_tab w-inline-block">
                                    <div class="c-title-4">Rent Payment</div>
                                    <div class="c-learn-dropdown_icon w-embed">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1.51002C1 1.44201 1.0114 1.37644 1.03421 1.3133C1.05702 1.25015 1.09124 1.19429 1.13685 1.14572C1.22809 1.04857 1.33757 0.999999 1.4653 0.999999C1.59303 0.999999 1.70251 1.04857 1.79375 1.14572L8.0479 7.8051L14.1926 1.24772C14.2838 1.15058 14.3956 1.102 14.5279 1.102C14.6602 1.102 14.7719 1.15058 14.8631 1.24772C14.9544 1.34487 15 1.46387 15 1.60474C15 1.7456 14.9544 1.8646 14.8631 1.96175L8.37634 8.85428C8.28511 8.95143 8.17563 9 8.0479 9C7.92017 9 7.81069 8.95143 7.71945 8.85428L1.13685 1.85974C1.09124 1.81117 1.05702 1.75531 1.03421 1.69217C1.0114 1.62902 1 1.5683 1 1.51002Z" fill="#333333" stroke="currentColor" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="c-button-icon-right cc-home-tabs w-embed">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 11C0.947715 11 0.5 11.4477 0.5 12C0.5 12.5523 0.947715 13 1.5 13L1.5 11ZM23.2071 12.7071C23.5976 12.3166 23.5976 11.6834 23.2071 11.2929L16.8431 4.92893C16.4526 4.53841 15.8195 4.53841 15.4289 4.92893C15.0384 5.31946 15.0384 5.95262 15.4289 6.34315L21.0858 12L15.4289 17.6569C15.0384 18.0474 15.0384 18.6805 15.4289 19.0711C15.8195 19.4616 16.4526 19.4616 16.8431 19.0711L23.2071 12.7071ZM1.5 13L22.5 13L22.5 11L1.5 11L1.5 13Z" fill="#004BB0" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="c-dropdown_content">
                                    <div class="c-tabs_image-wrapper">
                                        <img height="424" loading="lazy" width="604" src="/assets/images/Web_HomePg_Features_Rent-Payment 1.png" alt="Rent Payment" class="c-tabs_image" />
                                    </div>
                                    <div>
                                        <div class="c-title-wrapper cc-blue-4 cc-tablet_hide">
                                            <h3 class="c-title-3">Rent Payment</h3>
                                        </div>
                                        <div class="c-text-wrapper cc-margin-bottom-16">
                                            <div class="c-text-1">Free online rent collection for landlords with secure transactions powered by Stripe. </div>
                                        </div>
                                        <div class="c-cta cc-tablet_no-margin">
                                            <div class="w-embed">
                                                <a class="c-button cc-tablet_text" href="/rent-payment" aria-label="Learn more about Rent Payment">
                                                    <span>Learn more</span>
                                                    <svg class="c-button-icon-right" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464465C11.9763 0.269203 11.6597 0.269203 11.4645 0.464465C11.2692 0.659728 11.2692 0.97631 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM1 4.5L15 4.5L15 3.5L1 3.5L1 4.5Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="c-section cc-linear-gradient cc-8-bottom-padding">
        <div class="c-container">
            <div class="c-content-wrap cc-reverse">
                <div class="c-content_copy">
                    <div class="c-tag cc-blue cc-hide-tablet">
                        <div>Enterprise</div>
                    </div>
                    <div class="c-title-wrapper cc-hide-tablet">
                        <h2 class="c-title-2">
                            <span class="cc-gradient-blue-2 cc-clip-text">Trusted</span> by industry leaders
                        </h2>
                    </div>
                    <div class="c-text-wrapper cc-trusted-by-paragraph">
                        <div class="c-title-5">KeyHolder powers the country&#x27;s largest MLS platforms, brokerages, associations and rental market places. </div>
                    </div>
                    <div class="c-text-wrapper">
                        <div class="c-title-5">Interested in enterprise rental solutions?</div>
                    </div>
                    <div class="c-cta cc-mobile_margin-16">
                        <a href="/contact-us?active-tab=sales" class="c-button w-inline-block">
                            <div>Book a Demo <br />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="c-content_graphic cc-home-lottie">
                    <div class="c-title-tablet">
                        <h2 class="c-title-2">
                            <span class="cc-gradient-blue-2 cc-clip-text">Trusted</span> by industry leaders
                        </h2>
                    </div>
<!--                    <div class="c-trusted-by-lottie" data-animation-type="lottie" data-src="/assets/js/home-trusted-by-industry.json" data-loop="0" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="1" data-duration="0"></div>-->
                    <div class="c-trusted-by-lottie" data-animation-type="lottie">
                        <img src="/assets/images/leaders.png" alt="Industry leaders" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once "inc/footer.php";
?>
