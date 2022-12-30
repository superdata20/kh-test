<?php
require_once "../inc/header.php";
$services = [
    'starter' => ['Property Listing', 'Rental Application'],
    'pro' => ['Property Listing', 'Rental Application', 'Tenant Screening', 'Renter Document Upload', 'Automated Reference Checks'],
    'enterprise' => ['Property Listing', 'Rental Application', 'Tenant Screening', 'Renter Document Upload', 'Automated Reference Checks', 'API Integration', 'Unlimited Screening'],
]
?>
<main class="c-page">
    <div class="c-section cc-pricing">
        <div class="c-container">
            <div class="c-pricing_title">
                <div class="c-title-wrapper cc-gradient-blue-1 cc-clip-text">
                    <h1 class="c-title-2 cc-mobile_32">Simple, transparent pricing</h1>
                </div>
                <div class="c-text-wrapper">
                    <div class="c-title-4">Pay for what you need (when you need it).</div>
                </div>
            </div>
            <div class="c-pricing">
                <div class="c-pricing_card">
                    <div class="c-pricing_card-title">
                        <div class="c-title-wrapper cc-gradient-blue-1 cc-clip-text">
                            <h2 class="c-title-4 cc-mobile_22">Starter</h2>
                        </div>
                    </div>
                    <div class="c-title-wrapper cc-no-margin">
                        <h3 class="c-title-3">Free</h3>
                    </div>
                    <div class="c-cta cc-tablet_margin-16">
                        <a href="https://app.keyholder.ie/sign-in" class="c-button cc-white cc-wide w-inline-block">
                            <div class="c-text-1">Get Started</div>
                        </a>
                    </div>
                    <div class="c-pricing_card-included">
                        <div class="c-title-wrapper cc-blue-1 cc-tablet_margin-16">
                            <h4 class="c-text-1">Includes:</h4>
                        </div>
                        <ul role="list" class="c-whats-included-list w-list-unstyled">
                            <?php
                            foreach($services['starter'] as $service) {
                            ?>
                                <li>
                                    <div class="c-whats-included-list_item">
                                        <div class="c-whats-included-list_icon w-embed">
                                            <img src="/assets/images/tick.svg">
                                        </div>
                                        <div class="c-text-1"><?=$service;?></div>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="c-pricing_card cc-center">
                    <div class="c-pricing_card-recommended">
                        <div class="c-text-1 cc-bold">Recommended</div>
                    </div>
                    <div class="c-pricing_card cc-center_inner">
                        <div class="c-pricing_card-title">
                            <div class="c-title-wrapper cc-gradient-blue-1 cc-clip-text">
                                <h2 class="c-title-4 cc-mobile_22">Pro</h2>
                            </div>
                        </div>
                        <div class="c-title-wrapper cc-no-margin">
                            <h3 class="c-title-3">€20 <span class="c-text-1">/month</span>
                            </h3>
                        </div>
                        <div class="c-cta cc-tablet_margin-16">
                            <a href="https://app.keyholder.ie/sign-in/keyholder-pro/" class="c-button cc-wide cc-bold w-inline-block">
                                <div class="c-text-1">Start Free Trial</div>
                            </a>
                        </div>
                        <div class="c-pricing_card-included">
                            <div class="c-title-wrapper cc-blue-1">
                                <h4 class="c-text-1">Includes:</h4>
                            </div>
                            <ul role="list" class="c-whats-included-list w-list-unstyled">
                                <?php
                                foreach($services['pro'] as $service) {
                                ?>
                                    <li>
                                        <div class="c-whats-included-list_item">
                                            <div class="c-whats-included-list_icon w-embed">
                                                <img src="/assets/images/tick.svg">
                                            </div>
                                            <div class="c-text-1"><?=$service;?></div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c-pricing_card">
                    <div class="c-pricing_card-title">
                        <div class="c-title-wrapper cc-gradient-blue-1 cc-clip-text">
                            <h2 class="c-title-4 cc-mobile_22">Enterprise</h2>
                        </div>
                    </div>
                    <div class="c-title-wrapper cc-no-margin">
                        <h3 class="c-title-3">Contact us</h3>
                    </div>
                    <div class="c-cta cc-tablet_margin-16">
                        <a href="/contact-us?active-tab=sales" class="c-button cc-white cc-wide w-inline-block">
                            <div class="c-text-1">Talk to Sales <br />
                            </div>
                        </a>
                    </div>
                    <div class="c-pricing_card-included">
                        <div class="c-title-wrapper cc-blue-1">
                            <h4 class="c-text-1">What&#x27;s included</h4>
                        </div>
                        <ul role="list" class="c-whats-included-list w-list-unstyled">
                            <?php
                            foreach($services['enterprise'] as $service) {
                            ?>
                                <li>
                                    <div class="c-whats-included-list_item">
                                        <div class="c-whats-included-list_icon w-embed">
                                            <img src="/assets/images/tick.svg">
                                        </div>
                                        <div class="c-text-1"><?=$service;?></div>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once "../inc/footer.php";
?>
