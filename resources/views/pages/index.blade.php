@extends('pages.layout.app')
@section('content')

<div class="m-auto container px-8 lg:px-40">
        <section class="mb-32 mt-32 md:mt-72">
            <div class="">
                <div class="text-left">
                    <h1>NEW: The Bolt Card</h1>
                    <h2 class="pt-4 text-lg md:text-2xl">The Bolt Card is a physical card that you can tap to pay via Lightning in person or on a website on your phone.</h2>
                </div>
                <div class="w-full flex flex-col md:mt-16 md:flex-row md:space-x-8">
                    <div class="my-4 w-full md:w-5/6">
                        <img alt="The Bolt Card is a physical card that you can use to pay for goods via the Lightning network" height="1177" layout="intrinsic" src="Images/BoltCards/BoltCardLightning.png" width="1765"></img>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h3>Features</h3>
                        <ul class="mx-8 md:mx-0" id="navlist">
                            <li><span style="top:-18px; position:relative;" class="text-sm">Lightning payments</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">NFC/Contactless</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Send BTC payments, funded from any currency</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Easy setup via CoinCorner app</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Use as a Gift Card to give BTC to a friend</span></li>
                        </ul>
                        <div class=" flex flex-col text-center w-full xl:w-9/12 md:mt-24 flex-col">
                            <a href="BuyTheBoltCard.html" class="btn btn-mallard btn-mobile mb-4">Buy now</a>
                            <a href="TheBoltCard.html" class="btn btn-mallard-border btn-mobile">How does it work?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="md:flex w-full space-x-3 md:px-0 px-8">
            <div class="md:w-1/3 mt-5">
                <img alt="Trusted by 200,000 users" class="transform-center" height="143" layout="intrinsic" src="Images/HomePageV3/Trust-Icon.png" width="143"></img>
                <p class="text-2xl md:text-xl mt-3 w-full text-center leading-tight">Trusted by<br /> <strong>200,000 + users </strong></p>
            </div>
            <div class="md:w-1/3 md:mt-5 mt-10">
                <img alt="Buy Bitcoin in under 10 minutes" class="transform-center" height="143" layout="intrinsic" src="Images/HomePageV3/Stopwatch-Icon.png" width="126"></img>
                <p class="text-2xl md:text-xl mt-3 w-full text-center leading-tight">Buy Bitcoin in under <br /><strong>10 minutes</strong></p>
            </div>
            <div class="md:w-1/3 md:mt-5 mt-10">
                <img alt="Buy Bitcoin with as little as £10" class="transform-center" height="143" layout="intrinsic" src="Images/HomePageV3/Wallet-Icon.png" width="125"></img>
                <p class="text-2xl md:text-xl mt-3 w-full text-center leading-tight">Start with as little<br /> as <strong>£10</strong></p>
            </div>
        </section>
        <section class="mt-20 py-20">
            <h1 class="text-left font-semibold text-cc-mallard md:mt-48">How to buy Bitcoin</h1>
            <h2 class="text-left my-5">Buying Bitcoin has never been easier!</h2>
            <div class="flex-mobile justify-around space-y-8 md:space-y-0 md:space-x-8 mt-12 pb-4">
                <div class="md:w-1/3">
                    <div>
                        <img alt="Register with CoinCorner today" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Register-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Register</h3>
                        <p class="text-center">Get started by <a class="underline" href="Register.html">registering</a> for a free account - it only takes a few minutes!</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="Buy Bitcoin with CoinCorner" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Deposit-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Deposit</h3>
                        <p class="text-center">Instantly fund your account with credit or debit card, bank transfer or SEPA. Alternatively, set up a standing order with <a class="underline" href="bitcoin-auto-buy.html">Auto Buy</a>.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="Buy, Sell &amp; Store Bitcoin with CoinCorner" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Buy-Sell-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Buy</h3>
                        <p class="text-center">Go to the Buy and Sell page to use your funds to buy Bitcoin. Learn how to buy Bitcoin <a class="underline" href="buy-bitcoin.html">here</a>.</p>
                    </div>
                </div>
            </div>
            <div class="text-center w-full mt-4 flex-col">
                <a href="Register.html" class="btn btn-mallard btn-mobile">Buy Bitcoin</a>
                <a href="buy-bitcoin.html" class="block text-cc-sec-grey font-normal mt-2">Learn More</a>
            </div>
        </section>
        <section class="mt-20 py-20">
            <div class="justify-center flex mr-20">
                <h1 class="text-cc-light-grey text-xl md:mr-44">Media Article Features - </h1>
            </div>
            <div class="md:w-full mt-2">
                <div class="flex justify-center flex-col md:flex-row md:space-x-6">
                    <div class="flex-col justify-center mt-2">
                        <a href="https://www.bbc.co.uk/news/business-32394170" target="_blank" rel="nofollow noreferrer">
                            <img alt="BBC Logo" class="m-auto" height="37" src="Images/HomePageV3/BBC-Logo.png" width="125"></img>
                        </a>
                    </div>
                    <div class="flex-col justify-center mt-2">
                        <a href="https://www.independent.co.uk/life-style/gadgets-and-tech/features/bitcoin-halving-price-prediction-2020-a9488506.html" target="_blank" rel="nofollow noreferrer">
                            <img alt="Independent Logo" class="m-auto" height="37" layout="intrinsic" src="Images/HomePageV3/Independent.png" width="360"></img>
                        </a>
                    </div>
                    <div class="flex-col justify-center mt-2">
                        <a href="https://www.forbes.com/sites/billybambrough/2020/04/24/is-2020-the-new-2017-bitcoin-could-be-this-years-best-performing-asset/#70aa924b610c" target="_blank" rel="nofollow noreferrer">
                            <img alt="Forbes Logo" class="m-auto" height="37" src="Images/HomePageV3/Forbes-Logo.png" width="150"></img>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col md:justify-center md:flex-row mt-3 md:space-x-6">
                    <div class="flex-col mt-2">
                        <a href="https://www.verdict.co.uk/electronic-payments-international/news/coronavirus-savvy-investors-are-snatching-bitcoin-at-bargain-prices/" target="_blank" rel="nofollow noreferrer">
                            <img alt="Verdict Logo" class="m-auto" height="37" src="Images/HomePageV3/Verdict-Logo.png" width="240"></img>
                        </a>
                    </div>
                    <div class="flex-col mt-2">
                        <a href="https://www.mirror.co.uk/money/man-explains-chose-take-entire-18984194" target="_blank" rel="nofollow noreferrer">
                            <img alt="Mirror Logo" class="m-auto" height="37" src="Images/HomePageV3/Mirror-Logo.png" width="126"></img>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 py-20">
            <h1 class="text-left font-semibold text-cc-mallard">Auto buy Bitcoin</h1>
            <h2 class="text-left my-5">A stress-free way to buy Bitcoin regularly, without lifting a finger.</h2>
            <div class="w-full flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <div class="mt-5 text-center">
                        <h3 class="index-header font-bold">Get started</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Register for a free account.</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Set up</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Create a standing order with your bank and choose how often you want to buy Bitcoin.</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Relax</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Watch your Bitcoin portfolio grow!</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="mt-10 flex justify-center">
                        <img alt="CoinCorner Desktop and Mobile" class="object-contain mb-12" height="299" layout="intrinsic" src="Images/HomePageV3/CC-Desktop-Mob.png" width="419"></img>
                    </div>
                    <div class="w-full md:w-auto text-center mt-10">
                        <a href="Register.html" class="btn btn-mallard btn-mobile">Auto Buy Bitcoin</a>
                        <a href="bitcoin-auto-buy.html" class="block mt-2 small text-center text-cc-sec-grey font-normal mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="index-hr hidden lg:block mt-16" />
        <section class="py-20">
            <h1 class="text-left font-semibold text-cc-mallard">Earn Bitcoin when you <br /> shop online</h1>
            <div>
                <div class="flex-mobile">
                    <div class="flex md:w-9/12">
                        <h2 class="text-left my-5">Shop with 100s of online retailers and earn up to 40% back in Bitcoin!</h2>
                    </div>
                </div>
            </div>
            <div class="w-full flex-mobile">
                <div class="flex-col mt-10">
                    <img alt="Earn Bitcoin at a number of merchant&#39;s such as; B&amp;Q, Myprotein and Size?" class="md:mt-10" height="277" layout="intrinsic" src="Images/HomePageV3/Cashback-Logos.png" width="572"></img>
                    <div class="w-full md:w-auto block mt-11 text-center md:pt-1">
                        <img alt="Chrome, Edge, Opera web browsers" class="transform-center mb-2 md:mt-8" height="41" layout="intrinsic" src="Images/HomePageV3/Browser-Logos.png" width="242"></img>
                        <a href="https://chrome.google.com/webstore/detail/coincorner-earn-bitcoin/onebfemgnhgpkdcmijbpjakhhidonjfl" target="_blank" rel="noopener nofollow" class="btn btn-mallard-border btn-mobile font-bold mt-5">Download Our Extension</a>
                    </div>
                </div>
                <div class="flex-column mt-10 md:w-1/2">
                    <div class="text-center">
                        <h3 class="index-header font-bold">Search</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Browse our directory of 1000+ top brands.</p>
                        <a class="underline" href="cashback-partners.html">Search our partners</a>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Shop</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Follow the link to your favourite retailer and shop as normal.</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Earn</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">You'll get Bitcoin "cashback" with every purchase!</p>
                    </div>
                    <div class="w-full md:w-auto text-center mt-10">
                        <a href="Register.html" class="btn btn-mallard btn-mobile md:w-60">Earn Bitcoin</a>
                        <a href="earn-bitcoin.html" class="block mt-2 small text-center text-cc-sec-grey font-normal mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="index-hr hidden lg:block mt-16" />
        <section class="py-20">
            <h1 class="text-left font-semibold text-cc-mallard">Accept Bitcoin payments with CoinCorner Checkout</h1>
            <div>
                <div class="flex-mobile">
                    <div class="flex md:w-9/12">
                        <h2 class="text-left my-5">Stand out from the crowd by accepting Bitcoin payments at your business.</h2>
                    </div>
                </div>
            </div>
            <div class="w-full flex-mobile">
                <div class="md:w-1/2 flex-col">
                    <div class="md:mt-12">
                        <div class="flex justify-center">
                            <img alt="Start Accepting Bitcoin today" class="md:w-full" height="275" layout="intrinsic" src="Images/HomePageV3/Checkout.png" width="400"></img>
                        </div>
                        <div class="flex justify-center">
                            <a href="merchantregister.html" class="btn mt-11 btn-mallard btn-mobile">Accept Bitcoin</a>
                        </div>
                        <div class="flex justify-center">
                            <a href="checkout.html" class="block mt-2 small text-center text-cc-sec-grey font-normal mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="flex-col mt-10 md:w-1/2">
                    <div class="text-center">
                        <h3 class="index-header font-bold">Quick and easy setup</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Get up and running in minutes!</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Global reach</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Appeal to new customers worldwide.</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Eliminate fraud</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">No chargebacks with Bitcoin.</p>
                    </div>
                    <div class="text-center mt-10">
                        <h3 class="index-header font-bold">Just 1% fee</h3>
                        <p class="text-center md:w-2/4 m-auto md:mt-2">Lower than payment processors like PayPal.</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="index-hr hidden lg:block mt-16" />
        <section>
            <h1 class="text-right font-semibold text-cc-mallard pt-20">Why do people buy Bitcoin?</h1>
            <h2 class="text-right my-5">Will you be part of the inevitable?</h2>
            <div class="flex-mobile justify-around space-y-8 md:space-y-0 md:space-x-8 mt-16">
                <div class="md:w-1/3">
                    <div>
                        <img alt="Bitcoin gives you control" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Control-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Take Back Control</h3>
                        <p class="text-center">Bitcoin is “decentralised” which means that no central authority (like a Government or bank) controls it. It can be sent to anyone, anywhere in the world in a matter of minutes.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="Buy goods with Bitcoin" class="transform-center" height="101" src="Images/HomePageV3/Pay-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Pay For Goods</h3>
                        <p class="text-center">With a growing number of businesses now accepting Bitcoin as a payment method, many people are using it to pay for everyday goods and services.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="HODL Bitcoin" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Store-Bitcoin.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2">Store Of Wealth</h3>
                        <p class="text-center">Often called “digital gold”, many people buy Bitcoin as a store of wealth and as a way to diversify their investment portfolio.</p>
                    </div>
                </div>
            </div>
            <div class="text-center w-full mt-4 flex-col pb-20">
                <a href="Register.html" class="btn btn-mallard btn-mobile">Buy Bitcoin</a>
                <a href="buy-bitcoin.html" class="block text-cc-sec-grey font-normal mt-2">Learn More</a>
            </div>
        </section>
        <hr class="index-hr hidden lg:block mt-16" />
        <section>
            <h1 class="text-left font-semibold text-cc-mallard pt-20">Why Choose CoinCorner?</h1>
            <h2 class="text-left my-5">We make Bitcoin easy for everyone and have grown to support customers and businesses worldwide with a range of innovative services.</h2>
            <div class="flex-mobile justify-around space-y-8 md:space-y-0 md:space-x-8 mt-16 pb-20">
                <div class="md:w-1/3">
                    <div>
                        <img alt="CoinCorner, trusted Bitcoin Exchange" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Trust-Bitcoin.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-1">Trusted Bitcoin <br /> exchange</h3>
                        <p class="text-center">Founded in 2014, we’re an award-winning exchange that holds Designated Business status with the IOMFSA and is trusted by 200,000+ people globally.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="Auto-Buy Bitcoin with CoinCorner" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Auto-Buy-Icon.png" width="101"></img>
                        <h3 class="text-center font-semibold index-header my-2 mb-9">Instant and auto Bitcoin buys</h3>
                        <p class="text-center">Available in 45+ countries, you can buy and sell Bitcoin with GBP or EUR using credit or debit card, bank transfer or SEPA.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div>
                        <img alt="Buy Bitcoin with the CoinCorner app" class="transform-center mb:mb-7" height="101" src="Images/HomePageV3/Manage-App-Icon.png" width="101"></img>
                        <h3 class="text-center index-header font-semibold my-2 mb-9">Mobile app</h3>
                        <p class="text-center">Download the CoinCorner app and get access to your account wherever you are!</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-full">
                <blockquote class="text-center m-auto mt-24 text-cc-light-grey"><h1 class="md:text-4xl text-cc-light-grey"><span class="fontello-icon"></span> Bitcoin is the most ground-breaking technological innovation since the internet <span class="fontello-icon"></span> - Danny Scott, CEO</h1></blockquote>
            </div>
        </section>
        <hr class="index-hr hidden lg:block mt-16" />
        <section class="py-20">
            <h1 class="text-left text-cc-mallard font-semibold">FAQs</h1>
            <h2 class="text-left my-5">Do you have any questions about Bitcoin or our services?</h2>
            <div class="border-b faq-border">
                <input id="q1" class="toggle" type="checkbox">
                <label for="q1" class="faq font-bold text-xl">How long will it take me to buy Bitcoin with CoinCorner?<span class="fontello-icon text-cc-icon-blue"></span></label>
                <p class="collapsed">
                    It takes minutes to buy Bitcoin with us. We’ve worked hard to create a simple and easy sign up process.
                    As soon as you’ve made an account, you can fund it with fiat currency and use this balance to buy Bitcoin.
                </p>
            </div>
            <div class="border-b faq-border">
                <input id="q2" class="toggle" type="checkbox">
                <label for="q2" class="faq font-bold text-xl"> What payment methods are available with CoinCorner?<span class="fontello-icon text-cc-icon-blue"></span></label>
                <p class="collapsed">
                    All the popular options are available! We support a number of major payment methods, including credit and debit card, bank transfer or SEPA.
                </p>
            </div>
            <div class="border-b faq-border">
                <input id="q4" class="toggle" type="checkbox">
                <label for="q4" class="faq font-bold text-xl">Why do I need to give my personal details?<span class="fontello-icon text-cc-icon-blue"></span></label>
                <p class="collapsed">
                    CoinCorner is an IOMFSA registered company and we follow rules which require us to ask for standard personal details such as name, email, date of birth and address.
                    These are used for compliance purposes.
                </p>
            </div>
            <div class="border-b faq-border">
                <input id="q5" class="toggle" type="checkbox">
                <label for="q5" class="faq font-bold text-xl"> Can I transfer my Bitcoin with CoinCorner?<span class="fontello-icon text-cc-icon-blue"></span></label>
                <p class="collapsed">
                    Yes! You can buy, sell, send, receive, store and transfer your Bitcoin with CoinCorner.
                    Whatever you want to do with it, you can do quickly and easily.
                    <br />
                    We recommend that customers consider transferring their Bitcoin to offline (cold) storage for safe-keeping.
                </p>
            </div>
            <div class="mt-8 mb-10">
                <p>For more help, <a class="underline" href="https://support.coincorner.com/hc/en-us" target="_blank" rel="nofollow noreferrer">visit our Help Centre.</a></p>
                <p>*You may be required to provide documents after registering should you fail any of our automated checks</p>
            </div>
        </section>
    </div>


@endsection
