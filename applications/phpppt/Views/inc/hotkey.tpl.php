<slides id="container">
    <slide class="slide">
        <section class="slide-wrapper">
            <article class="flexbox vcenter">
                <h1>nodePPT快捷键介绍</h1>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>快速翻页</h2>
            </hgroup>
            <article>
                <ol>
                    <li>输入页码，然后enter</li>
                    <li>使用O键，开启纵览模式，然后翻页</li>
                </ol>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>动效样式强调</h2>

            </hgroup>
            <article>
                <p>这段话里面的<strong>加粗</strong>和<em>em</em>字体会动效哦~</p>
                <p>按下【H】键查看效果</p>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>支持zoom.js</h2>
            </hgroup>
            <article>
                <p>增加了zoom.js的支持，在演示过程中使用<code>alt</code>+鼠标点击，则点击的地方就开始放大，再次<code>alt+click</code>则回复原状</p>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>图片，点击全屏</h2>
            </hgroup>
            <article>
                <img src="/img/bg1.png" alt="" title="">
            </article>
        </section>
    </slide>
    <slide class="slide hasnote">
        <aside class="note">
            <section>
                <h2>这里是note</h2>
                <p>使用n键，才能显示</p>
            </section>
        </aside>
        <section class="slide-wrapper">
            <hgroup>
                <h2>使用note笔记</h2>
                <h3>note笔记是多窗口，或者自己做一些笔记用的</h3>
            </hgroup>
            <article>
                <p>按下键盘【N】键测试下note，</p>
                <p>markdown语法如下：</p>
                <pre><code class="markdown">[note]
这里是note，{ 要换成中括号啊！！
{/note]
                </code></pre>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>使用画笔</h2>
                <h3>使用画笔做标记哦~你也可以随便作画啊！</h3>
            </hgroup>
            <article>
                <p>按下键盘【P】键：按下鼠标左键，在此处乱花下看看效果。</p>
                <p>按下键盘【B/Y/R/G/M】：更换颜色，按下【1~4】：更换粗细</p>
                <p>按下键盘【C】键：清空画板</p>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>宽度不够？？</h2>
            </hgroup>
            <article>
                <p>按下键盘【W】键，切换到更宽的页面看效果，第二次按键返回</p>
                <table>
                    <thead>
                    <tr>
                        <th style="text-align:left"></th>
                        <th style="text-align:center">less</th>
                        <th style="text-align:right">sass</th>
                        <th>stylus</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align:left">环境</td>
                        <td style="text-align:center">js/nodejs</td>
                        <td style="text-align:right">Ruby(这列右对齐)</td>
                        <td class="highlight">nodejs(高亮)</td>
                    </tr>
                    <tr>
                        <td style="text-align:left">扩展名</td>
                        <td style="text-align:center">.less</td>
                        <td style="text-align:right">.sass/.scss</td>
                        <td>.styl</td>
                    </tr>
                    <tr>
                        <td style="text-align:left">特点</td>
                        <td style="text-align:center">老牌，用户多，支持js解析</td>
                        <td style="text-align:right">功能全，有成型框架，发展快</td>
                        <td>语法多样，小众</td>
                    </tr>
                    <tr>
                        <td style="text-align:left">案例/框架</td>
                        <td style="text-align:center"><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></td>
                        <td style="text-align:right"><a href="http://compass-style.org" target="_blank">compass</a> <a href="http://bourbon.io" target="_blank">bourbon</a></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>使用overview模式</h2>
            </hgroup>
            <article>
                <p>按下键盘【O】键。看下效果。</p>
                <p>在overview模式下，方向键下一页，【enter】键进入选中页</p>
                <p>或者按下键盘【O】键，退出overview模式</p>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <article class="flexbox vcenter">
                <h1>介绍下phpPPT的函数和事件</h1>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <article>
                <p>支持单个slide事件：build/enter/leave/keypress，事件统一在&#91;slide&#93;
                    中使用<code>data-on-X</code>来指定一个全局函数名</p>
                <ul>
                    <li>build：当触发下一步操作的时会触发，event具有stop方法</li>
                    <li>keypress：在当前页面按键触发，event具有stop方法</li>
                    <li>enter/leave：进入/离开 此页面触发的事件，event无stop方法</li>
                </ul>
            </article>
        </section>
    </slide>
    <slide class="slide" data-on-leave="outcallback" data-on-enter="incallback" >
        <section class="slide-wrapper">
            <hgroup>
                <h2>使用回调</h2>
            </hgroup>
            <article>
                <ul>
                    <li>&#91;slide data-on-leave=&quot;fnName&quot;&#93;<ul>
                            <li>进入执行回调incallback函数</li>
                        </ul>
                    </li>
                    <li>&#91;slide data-on-enter=&quot;fnName&quot;&#93;<ul>
                            <li>退出执行outcallback函数</li>
                        </ul>
                    </li>
                </ul>
                <p>亦可以组合写：</p>
                <blockquote>
                    <p>&#91;slide data-on-leave=&quot;foo&quot; data-on-enter=&quot;bar&quot;&#93;</p>
                </blockquote>
                <p id="incallback"></p>
                <p id="outcallback"></p>
            </article>
        </section>
    </slide>
    <slide class="slide">
        <section class="slide-wrapper">
            <hgroup>
                <h2>远程执行函数</h2>
            </hgroup>
            <article>
                <p>在多屏和远程模式中，可以使用<code>proxyFn</code>来远程执行函数。</p>
                <pre><code class="html">&lt;script&gt;
function globalFunc(){
}
&lt;/script&gt;
&lt;button onclick=&quot;Slide.proxyFn(&#39;globalFunc&#39;)&quot; class=&quot;btn btn-default&quot;&gt;远程执行函数&lt;/button&gt;
                </code></pre>
                <p><button onclick="Slide.proxyFn('globalFunc','args')" class="btn btn-default">测试远程执行函数</button>
                    <a href="?_multiscreen=1#33">在多屏中测试远程执行</a></p>
                <script>
                    function globalFunc(a){
                        alert('proxyFn success: '+a+location.href);
                    }
                </script>
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