    <slides id="container">
        <slide class="slide fill" data-transition="vertical3d" style="background-image:url(/img/bg1.png)">
            <section class="slide-wrapper">
                <article>
                    <h1>DHT原理及出现历史</h1>
                </article>
            </section>
        </slide>
        <slide class="slide">
            <section class="slide-wrapper">
                <hgroup>
                    <h2>客户端 <-> 服务器端:</h2>
                </hgroup>
                <article style="text-align:left">
                    <p>很久很久以前, 当要下载一个资源时, 那么只能去提供该资源的服务器进行下载, 如果同时只有10来个人进行下载的话, 服务器负载还没什么问题, 但是, 当这资源越来越热门时, 就会有成千上万的人蜂拥进来, 那么服务器就会受不了! 为了支持更多人同时下载, 就会加大带宽, 增加服务器! 这成本实在是太高了! .</p>
                </article>
            </section>
        </slide>
        <slide class="slide">
            <section class="slide-wrapper">
                <hgroup>
                    <h2>客户端 <- tracker -> 客户端:</h2>
                </hgroup>
                <article style="text-align:left">
                    <p>后来, 一个很牛逼的技术出现了, 那就是架设一台tracker服务器. 当张三要发布”虫师.avi”的资源时, 对该资源制作一个种子, 这个种子记录了该资源的tracker服务器地址, 名字, 大小, 创建时间, 块长度, 每一逻辑块的hash值等描述信息. 告知tracker服务器我有这么个资源, 然后张三把这个很小很小的种子文件发布到各个网站, 这资源当然就在张三电脑里. 当李四下载该种子后, 用比如迅雷, 比特精灵这类似的软件打开时, 该软件就会向种子记录的tracker进行请求, 说要下载”虫师.avi”资源, tracker就会自己找到谁有该资源, 当找到张三有时, tracker就会把张三的地址信息发给李四, 然后李四就会连接张三进行下载. 在这里, tracker也会把李四给记录下载, 当王五也想下载时, tracker会把张三, 李四的地址信息发给王五, 那么王五可能会到张三那里下载该资源的前一半, 到李四下载后一半. 后面就以此循环</p>
                    <p>这里的tracker就不需要存储真实资源, 它只仅仅存储谁有什么该资源的信息而已, 所以需要的带宽和服务器配置就不需要那么高了.这就是为什么”下载人数越多, 下载速度越快”</p>
                    <p>假如所有主要的tracker服务器被封后或者出了故障, 就没了中介人, 不能下载资源</p>
                </article>
            </section>
        </slide>
        <slide class="slide">
            <section class="slide-wrapper">
                <hgroup>
                    <h2>客户端 <-> 客户端 (P2P):</h2>
                </hgroup>
                <article style="text-align:left">
                    <p>最后, 一个更牛逼哄哄的技术又出现了 (DHT)</p>
                    <p>把DHT网络比作一个朋友圈子, 你想进入这个圈子必须要有一个人带领你进去, 通常会有一些特定人负责介绍你进入这个圈子. 当你被A带进这个朋友圈, 此刻你就只认识A而已. 但是你的目的是想找奥巴马总统, 所以你会问A要奥巴马的联系方式, 但是A没有奥巴马的联系方式, 他会介绍一个美国朋友B给你认识. 于是你去问B要奥巴马的联系方式, B其实也没有奥巴马的联系方式, 但是B认识一个州长C. 于是你又得到了C的联系方式, C把奥巴马的联系方式告诉你之后, 你就可以写信或者致电给奥巴马了</p>
                </article>
            </section>
        </slide>
        <slide class="slide">
            <section class="slide-wrapper">
                <hgroup>
                    <h2>做一个DHT爬虫的大概步骤:</h2>
                </hgroup>
                <article style="text-align:left">
                    <ul class="rollIn">
                        <li>生成一个node ID.</li>
                        <li>构建路由表</li>
                        <li>加入DHT网络, 不停地使用find_node</li>
                        <li>处理ping, find_node, get_peers, announce_peer 4个请求</li>
                        <li>定时刷新路由表</li>
                        <li>持久存储路由表</li>
                    </ul>
                </article>
            </section>
        </slide>
        <slide class="slide">
            <section class="slide-wrapper">
                <hgroup>
                    <h2>最后来个demo吧</h2>
                </hgroup>
                <article>
                    <iframe data-src="http://23.110.7.177:8080/" src="about:blank;"></iframe>
                </article>
            </section>
        </slide>
        <slide class="slide logoslide dark nobackground">
            <article class="flexbox vcenter">
                <h2 style="color: white;">Powered By phpPPT v1.0</h2>
            </article>
        </slide>
        <div class="slideTip" id="tip"></div>
    </slides>