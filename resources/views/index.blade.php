@extends('main')

@section('content')

    <!------------------------banner------------------------>
    <section id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="bannercenter">
                    <div class="right"></div>
                    <div class="bannertext">
                        <h1>行萬里路</h1>
                        <h1>只為與您書中相遇</h1>
                        <p>專注於藝術  音樂類型書籍</p>
                        <button>查看更多音樂書籍</button>
                    </div>
                    <div class="left"></div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------count------------------------>

    <section id="count">
        <div class="container">
            <div class="row">
                <div class="col-md-3 countname">
                    <div class="name">
                        <p>美術用品</p>
                        <p>Art Supplies</p>
                    </div>
                    <div class="number">
                        <p>1121<span>項</span></p>
                    </div>
                </div>
                <div class="col-md-3 countname">
                    <div class="name">
                        <p>書籍</p>
                        <p>Books</p>
                    </div>
                    <div class="number">
                        <p>350<span>項</span></p>
                    </div>
                </div>
                <div class="col-md-3 countname">
                    <div class="name">
                        <p>文具</p>
                        <p>Stationery</p>
                    </div>
                    <div class="number">
                        <p>1082<span>項</span></p>
                    </div>
                </div>
                <div class="col-md-3 final">
                    <div class="name">
                        <p>樂器</p>
                        <p>Instrument</p>
                    </div>
                    <div class="number">
                        <p>579<span>項</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------product------------------------>

    <section id="product">
        <div class="container-fluid">
            <div class="row product">
                <div class="col-md-6">
                    <div class="col-md-12 productbox"  id="pfirst">
                    <div class="hot">
                        <div class="hottop">
                            <p>HOT</p>
                        </div>
                        <div class="hotbottom">
                            <div class="hotone"></div>
                            <div class="hottwo"></div>
                        </div>
                    </div>
                    <img src="https://dummyimage.com/600x400/000/fff" alt="">
                    <p>STOCKMAR12色色鉛筆+1特別色</p>
                    <p>12色鉛筆+1特別色-鐵盒</p>
                    <div class="progress">
                        <div class="progressin"></div>
                    </div>
                    <p>僅剩庫存23件</p>
                    <p>會員優惠<span>TWD 780</span></p>
                    <button>加入購物車</button>
                    </div>
                </div>
                <div class="col-md-6" id="productboxout">
                    <div class="row">
                        <div class="col-md-12 titletext">
                            <h4>On sale in focus</h4>
                            <h1>焦點商品</h1>
                        </div>
                    </div>
                    <div class="row ">
                        @for( $i = 0; $i < 3 ; $i++)
                            <div class="col-md-4 productbox">
                                <div class="boxin">
                                    <img src="https://dummyimage.com/600x400/000/fff" alt="">
                                    <p>LYRA 色鉛筆12色(細)</p>
                                    <p>12色鐵盒</p>
                                    <p class="inp">會員優惠<span>TWD 650</span></p>
                                </div>
                                <button class="buttontop"><i class="fa fa-shopping-bag" aria-hidden="true">&nbsp;&nbsp;加入購物車</i></button>
                                <button class="buttonbottom">快速檢視</button>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------books------------------------>
    <section id="books">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 producttitle">
                    <h2>精選書籍</h2>
                </div>
                <div class="col-md-8">
                    <div class="dash"></div>
                </div>
            </div>
            <div class="container-fluid piccon">
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-2 pic">
                        <div class="books-img"><img src="https://dummyimage.com/600x400/000/fff" alt=""></div>
                        <i class="fa fa-arrows-alt 5x" aria-hidden="true">&nbsp;&nbsp;Quick View</i>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!------------------------instrument------------------------>
    <section id="instrument">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 producttitle">
                    <h2>精選樂器</h2>
                </div>
                <div class="col-md-8">
                    <div class="dash"></div>
                </div>
        </div>
            <div class="container-fluid piccon">
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="col-md-2 pic">
                            <div class="in-img"><img src="https://dummyimage.com/600x400/000/fff" alt=""></div>
                            <i class="fa fa-arrows-alt 5x" aria-hidden="true">&nbsp;&nbsp;Quick View</i>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!------------------------safe------------------------>
    <section id="safe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 producttitle">
                    <h2>安心購物反詐騙宣言</h2>
                </div>
                <div class="col-md-8">
                    <div class="dash"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hello">
                        <p>親愛的會員，您好：</p>
                        <p>易耕事業提醒您，我們絕對不會主動致電要求變更原訂單付款條件獲致 ATM 進行個人資料的設定。若接獲冒用易耕事業名義、易耕同仁、客服專線、公司代表號或銀行名義等之
                            來電顯示。要求變更付款條件或 ATM 重新轉帳等，敬請記下歹徒在電話中的陳述內容，並請撥打易耕事業服務電話：03-9590903(週一至週五 08:30-17:30) 或使用會員服務信箱
                            ：044555@gmail.com 來信告知，我們將盡速查證，或請與警政署「反詐騙諮詢專線 165 」。</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4  end">
                        <p>易耕事業股份有限公司 敬上</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 finalask">
                        <p>最後提醒；詐騙行為之所以發生損失，關鍵都在操作 ATM 或甚至臨櫃進行提款、轉帳，呼籲消費者在接獲自稱某網購業者客服電話，並要求提供存款餘額、要求轉帳時，千萬不要
                            照做，請先撥打警政署「反詐騙諮詢專線 165 」，或直接來電易耕事業，務必確認再確認。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------proxy------------------------>
    <section id="proxy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 producttitle">
                    <h2>品牌代理</h2>
                </div>
                <div class="col-md-8">
                    <div class="dash"></div>
                </div>
            </div>
            <div class="container">
                <div class="row proxyin">
                    <div class="col-md-3"><img src="/img/images.png" alt=""></div>
                    <div class="col-md-3"><img src="/img/2000px-Hans_Stockmar_Logo.svg.png" alt=""></div>
                    <div class="col-md-3"><img src="/img/2000px-Lyra.svg.png" alt=""></div>
                    <div class="col-md-3"><img src="/img/Mercurius-logo.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
@endsection