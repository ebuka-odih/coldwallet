@extends('pages.layout.app')
@section('content')

<div class="m-auto container px-8 lg:px-40">
        <section class="mb-32 mt-32 md:mt-72">
            <div class="">
                <div class="text-left">
                    <h3>CRYPTOASSET CUSTODY</h3>
                    <h1 style="color: black">Solutions</h1>
                    <h2 class="pt-4 text-lg md:text-2xl">Whether you're an institutional or individual investor, broker, exchange, payment service provider, corporate or token issuer, we speak your language.</h2>
                    <h2 class="pt-4 text-lg md:text-2xl">Experts in banking, cryptography and fintech, we offer solutions for institutional cryptoassets by safeguarding private keys and administering any digital asset financial transaction through our custodial wallet platform, TrustVault. Use our built-in applications and web services or build your own—Bitpanda Custody works the way you want and need.
                    </h2>
                </div>
                <div class="w-full flex flex-col md:mt-16 md:flex-row md:space-x-8">
                    <div class="my-4 w-full md:w-5/6">
                        <img alt="The Bolt Card is a physical card that you can use to pay for goods via the Lightning network" height="1177" layout="intrinsic" src="img/solution.png" width="1565"></img>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h3>Scope out your solution today</h3>
                        <ul class="mx-8 md:mx-0" id="navlist">
                            <li><span style="top:-18px; position:relative;" class="text-sm">Institutional Investors</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Service Providers</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Token Issuers</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Individual Investors</span></li>
                            <li><span style="top:-18px; position:relative;" class="text-sm">Corporates</span></li>
                        </ul>
                        <div class=" flex flex-col text-center w-full xl:w-9/12 md:mt-24 flex-col">
{{--                            <a href="BuyTheBoltCard.html" class="btn btn-mallard btn-mobile mb-4">Buy now</a>--}}
                            <a href="{{ route('register') }}" class="btn btn-mallard-border btn-mobile">How does it work?</a>
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
    <section>
        <h1 class="text-left font-semibold text-cc-mallard pt-20">Choose your custodial wallet service</h1>
        <h3 style="color: black">On-Chain</h3>
        <h2 class="text-left my-5">
            Securely hold cryptoassets and efficiently handle any financial transaction on Bitcoin, Ethereum, Xinfin or Binance Smart Chain blockchains. Tap deeper liquidity or leverage margin opportunities with our DeFi integrations. Better still, start staking ETH and earn interest. Our blockchain custody and wallet services ensure institutions receive a scalable, secure solution at an affordable price point.
        </h2>
        <div class="flex-mobile justify-around space-y-8 md:space-y-0 md:space-x-8 mt-16 pb-20">
            <div class="md:w-1/3">
                <div>
                    <img alt="CoinCorner, trusted Bitcoin Exchange" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Trust-Bitcoin.png" width="101"></img>
                    <h3 class="text-center index-header font-semibold my-1">Trusted by 50+ <br /> exchange</h3>
                </div>
            </div>
            <div class="md:w-1/3">
                <div>
                    <img alt="Auto-Buy Bitcoin with CoinCorner" class="mb-4 transform-center" height="101" src="Images/HomePageV3/Auto-Buy-Icon.png" width="101"></img>
                    <h3 class="text-center font-semibold index-header my-2 mb-9">Instant auto backup</h3>
                </div>
            </div>
            <div class="md:w-1/3">
                <div>
                    <img alt="Buy Bitcoin with the CoinCorner app" class="transform-center mb:mb-7" height="101" src="Images/HomePageV3/Manage-App-Icon.png" width="101"></img>
                    <h3 class="text-center index-header font-semibold my-2 mb-9">Mobile app</h3>
                    <p class="text-center">Download the Cold-Wallet app and get access to your account wherever you are!</p>
                </div>
            </div>
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

        <hr class="index-hr hidden lg:block mt-16" />
        <section class="py-20">
            <h1 class="text-left font-semibold text-cc-mallard">A Platform you can trust</h1>

            <div class="w-full flex-mobile">
                <div class="flex-col mt-10">
                    <img alt="Earn Bitcoin at a number of merchant&#39;s such as; B&amp;Q, Myprotein and Size?" class="md:mt-10" height="277" layout="intrinsic" src="Images/HomePageV3/Cashback-Logos.png" width="572"></img>

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

        <section>
            <div class="w-full">
                <blockquote class="text-center m-auto mt-24 text-cc-light-grey"><h1 class="md:text-4xl text-cc-light-grey"><span class="fontello-icon"></span> Bitcoin is the most ground-breaking technological innovation since the internet <span class="fontello-icon"></span> - Danny Scott, CEO</h1></blockquote>
            </div>
        </section>

    </div>


@endsection
