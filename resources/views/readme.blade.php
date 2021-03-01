    <h1 id="alpine-js">Alpine.js</h1>
    <p><img src="https://img.shields.io/bundlephobia/minzip/alpinejs" alt="npm bundle size"><br><img
            src="https://img.shields.io/npm/v/alpinejs" alt="npm version"><br><a
            href="https://alpinejs.codewithhugo.com/chat/"><img
                src="https://img.shields.io/badge/chat-on%20discord-7289da.svg?sanitize=true" alt="Chat"></a></p>
    <p>Alpine.js offers you the reactive and declarative nature of big frameworks like Vue or React at a much lower
        cost.</p>
    <p>You get to keep your DOM, and sprinkle in behavior as you see fit.</p>
    <p>Think of it like <a href="https://tailwindcss.com/">Tailwind</a> for JavaScript.</p>
    <blockquote>
        <p>Note: This tool&#39;s syntax is almost entirely borrowed from <a href="https://vuejs.org/">Vue</a> (and by
            extension <a href="https://angularjs.org/">Angular</a>). I am forever grateful for the gift they are to the
            web.</p>
    </blockquote>
    <h2 id="translated-documentation">Translated documentation</h2>
    <table>
        <thead>
            <tr>
                <th>Language</th>
                <th>Link for documentation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arabic</td>
                <td><a href="./README.ar.md"><strong>التوثيق باللغة العربية</strong></a></td>
            </tr>
            <tr>
                <td>Chinese Simplified</td>
                <td><a href="./README.zh-CN.md"><strong>简体中文文档</strong></a></td>
            </tr>
            <tr>
                <td>Chinese Traditional</td>
                <td><a href="./README.zh-TW.md"><strong>繁體中文說明文件</strong></a></td>
            </tr>
            <tr>
                <td>German</td>
                <td><a href="./README.de.md"><strong>Dokumentation in Deutsch</strong></a></td>
            </tr>
            <tr>
                <td>Indonesian</td>
                <td><a href="./README.id.md"><strong>Dokumentasi Bahasa Indonesia</strong></a></td>
            </tr>
            <tr>
                <td>Japanese</td>
                <td><a href="./README.ja.md"><strong>日本語ドキュメント</strong></a></td>
            </tr>
            <tr>
                <td>Portuguese</td>
                <td><a href="./README.pt.md"><strong>Documentação em Português</strong></a></td>
            </tr>
            <tr>
                <td>Russian</td>
                <td><a href="./README.ru.md"><strong>Документация на русском</strong></a></td>
            </tr>
            <tr>
                <td>Spanish</td>
                <td><a href="./README.es.md"><strong>Documentación en Español</strong></a></td>
            </tr>
            <tr>
                <td>Turkish</td>
                <td><a href="./README.tr.md"><strong>Türkçe Dokümantasyon</strong></a></td>
            </tr>
            <tr>
                <td>Français</td>
                <td><a href="./README.fr.md"><strong>Documentation en Français</strong></a></td>
            </tr>
            <tr>
                <td>Korean</td>
                <td><a href="./README.ko.md"><strong>한국어 문서</strong></a></td>
            </tr>
        </tbody>
    </table>
    <h2 id="install">Install</h2>
    <p><strong>From CDN:</strong> Add the following script to the end of your <code>&lt;head&gt;</code> section.</p>
    <pre><code class="lang-html">&lt;script src=&quot;https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js&quot; defer&gt;&lt;/script&gt;
</code></pre>
    <p>That&#39;s it. It will initialize itself.</p>
    <p>For production environments, it&#39;s recommended to pin a specific version number in the link to avoid
        unexpected breakage from newer versions.<br>For example, to use version <code>2.8.1</code> (latest):</p>
    <pre><code class="lang-html">&lt;script src=&quot;https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js&quot; defer&gt;&lt;/script&gt;
</code></pre>
    <p><strong>From npm:</strong> Install the package from npm.</p>
    <pre><code class="lang-js">npm i alpinejs
</code></pre>
    <p>Include it in your script.</p>
    <pre><code class="lang-js">import &#39;alpinejs&#39;
</code></pre>
    <p><strong>For IE11 support</strong> Use the following scripts instead.</p>
    <pre><code class="lang-html">&lt;script type=&quot;module&quot; src=&quot;https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js&quot;&gt;&lt;/script&gt;
&lt;script nomodule src=&quot;https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js&quot; defer&gt;&lt;/script&gt;
</code></pre>
    <p>The pattern above is the <a
            href="https://philipwalton.com/articles/deploying-es2015-code-in-production-today/">module/nomodule
            pattern</a> that will result in the modern bundle automatically loaded on modern browsers, and the IE11
        bundle loaded automatically on IE11 and other legacy browsers.</p>
    <h2 id="use">Use</h2>
    <p><em>Dropdown/Modal</em></p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ open: false }&quot;&gt;
    &lt;button @click=&quot;open = true&quot;&gt;Open Dropdown&lt;/button&gt;

    &lt;ul
        x-show=&quot;open&quot;
        @click.away=&quot;open = false&quot;
    &gt;
        Dropdown Body
    &lt;/ul&gt;
&lt;/div&gt;
</code></pre>
    <p><em>Tabs</em></p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ tab: &#39;foo&#39; }&quot;&gt;
    &lt;button :class=&quot;{ &#39;active&#39;: tab === &#39;foo&#39; }&quot; @click=&quot;tab = &#39;foo&#39;&quot;&gt;Foo&lt;/button&gt;
    &lt;button :class=&quot;{ &#39;active&#39;: tab === &#39;bar&#39; }&quot; @click=&quot;tab = &#39;bar&#39;&quot;&gt;Bar&lt;/button&gt;

    &lt;div x-show=&quot;tab === &#39;foo&#39;&quot;&gt;Tab Foo&lt;/div&gt;
    &lt;div x-show=&quot;tab === &#39;bar&#39;&quot;&gt;Tab Bar&lt;/div&gt;
&lt;/div&gt;
</code></pre>
    <p>You can even use it for non-trivial things:<br><em>Pre-fetching a dropdown&#39;s HTML content on hover.</em></p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ open: false }&quot;&gt;
    &lt;button
        @mouseenter.once=&quot;
            fetch(&#39;/dropdown-partial.html&#39;)
                .then(response =&gt; response.text())
                .then(html =&gt; { $refs.dropdown.innerHTML = html })
        &quot;
        @click=&quot;open = true&quot;
    &gt;Show Dropdown&lt;/button&gt;

    &lt;div x-ref=&quot;dropdown&quot; x-show=&quot;open&quot; @click.away=&quot;open = false&quot;&gt;
        Loading Spinner...
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>
    <h2 id="learn">Learn</h2>
    <p>There are 14 directives available to you:</p>
    <table>
        <thead>
            <tr>
                <th>Directive</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#x-data"><code>x-data</code></a></td>
                <td>Declares a new component scope.</td>
            </tr>
            <tr>
                <td><a href="#x-init"><code>x-init</code></a></td>
                <td>Runs an expression when a component is initialized.</td>
            </tr>
            <tr>
                <td><a href="#x-show"><code>x-show</code></a></td>
                <td>Toggles <code>display: none;</code> on the element depending on expression (true or false).</td>
            </tr>
            <tr>
                <td><a href="#x-bind"><code>x-bind</code></a></td>
                <td>Sets the value of an attribute to the result of a JS expression.</td>
            </tr>
            <tr>
                <td><a href="#x-on"><code>x-on</code></a></td>
                <td>Attaches an event listener to the element. Executes JS expression when emitted.</td>
            </tr>
            <tr>
                <td><a href="#x-model"><code>x-model</code></a></td>
                <td>Adds &quot;two-way data binding&quot; to an element. Keeps input element in sync with component
                    data.</td>
            </tr>
            <tr>
                <td><a href="#x-text"><code>x-text</code></a></td>
                <td>Works similarly to <code>x-bind</code>, but will update the <code>innerText</code> of an element.
                </td>
            </tr>
            <tr>
                <td><a href="#x-html"><code>x-html</code></a></td>
                <td>Works similarly to <code>x-bind</code>, but will update the <code>innerHTML</code> of an element.
                </td>
            </tr>
            <tr>
                <td><a href="#x-ref"><code>x-ref</code></a></td>
                <td>Convenient way to retrieve raw DOM elements out of your component.</td>
            </tr>
            <tr>
                <td><a href="#x-if"><code>x-if</code></a></td>
                <td>Remove an element completely from the DOM. Needs to be used on a <code>&lt;template&gt;</code> tag.
                </td>
            </tr>
            <tr>
                <td><a href="#x-for"><code>x-for</code></a></td>
                <td>Create new DOM nodes for each item in an array. Needs to be used on a <code>&lt;template&gt;</code>
                    tag.</td>
            </tr>
            <tr>
                <td><a href="#x-transition"><code>x-transition</code></a></td>
                <td>Directives for applying classes to various stages of an element&#39;s transition.</td>
            </tr>
            <tr>
                <td><a href="#x-spread"><code>x-spread</code></a></td>
                <td>Allows you to bind an object of Alpine directives to an element for better reusability.</td>
            </tr>
            <tr>
                <td><a href="#x-cloak"><code>x-cloak</code></a></td>
                <td>This attribute is removed when Alpine initializes. Useful for hiding pre-initialized DOM.</td>
            </tr>
        </tbody>
    </table>
    <p>And 6 magic properties:</p>
    <table>
        <thead>
            <tr>
                <th>Magic Properties</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#el"><code>$el</code></a></td>
                <td>Retrieve the root component DOM node.</td>
            </tr>
            <tr>
                <td><a href="#refs"><code>$refs</code></a></td>
                <td>Retrieve DOM elements marked with <code>x-ref</code> inside the component.</td>
            </tr>
            <tr>
                <td><a href="#event"><code>$event</code></a></td>
                <td>Retrieve the native browser &quot;Event&quot; object within an event listener.</td>
            </tr>
            <tr>
                <td><a href="#dispatch"><code>$dispatch</code></a></td>
                <td>Create a <code>CustomEvent</code> and dispatch it using <code>.dispatchEvent()</code> internally.
                </td>
            </tr>
            <tr>
                <td><a href="#nexttick"><code>$nextTick</code></a></td>
                <td>Execute a given expression AFTER Alpine has made its reactive DOM updates.</td>
            </tr>
            <tr>
                <td><a href="#watch"><code>$watch</code></a></td>
                <td>Will fire a provided callback when a component property you &quot;watched&quot; gets changed.</td>
            </tr>
        </tbody>
    </table>
    <h2 id="sponsors">Sponsors</h2>
    <p>&lt;img width=&quot;33%&quot;
        src=&quot;https://refactoringui.nyc3.cdn.digitaloceanspaces.com/tailwind-logo.svg&quot; alt=&quot;Tailwind
        CSS&quot;&gt;</p>
    <p><strong>Want your logo here? <a href="https://twitter.com/calebporzio">DM on Twitter</a></strong></p>
    <h2 id="community-projects">Community Projects</h2>
    <ul>
        <li><a href="https://alpinejs.codewithhugo.com/newsletter/">AlpineJS Weekly Newsletter</a></li>
        <li><a href="https://github.com/ryangjchandler/spruce">Spruce (State Management)</a></li>
        <li><a href="https://github.com/SimoTod/alpine-turbolinks-adapter">Turbolinks Adapter</a></li>
        <li><a href="https://github.com/KevinBatdorf/alpine-magic-helpers">Alpine Magic Helpers</a></li>
        <li><a href="https://github.com/ryangjchandler/awesome-alpine">Awesome Alpine</a></li>
    </ul>
    <h3 id="directives">Directives</h3>
    <hr>
    <h3 id="x-data"><code>x-data</code></h3>
    <p><strong>Example:</strong> <code>&lt;div x-data=&quot;{ foo: &#39;bar&#39; }&quot;&gt;...&lt;/div&gt;</code></p>
    <p><strong>Structure:</strong> <code>&lt;div x-data=&quot;[object literal]&quot;&gt;...&lt;/div&gt;</code></p>
    <p><code>x-data</code> declares a new component scope. It tells the framework to initialize a new component with the
        following data object.</p>
    <p>Think of it like the <code>data</code> property of a Vue component.</p>
    <p><strong>Extract Component Logic</strong></p>
    <p>You can extract data (and behavior) into reusable functions:</p>
    <pre><code class="lang-html">&lt;div x-data=&quot;dropdown()&quot;&gt;
    &lt;button x-on:click=&quot;open&quot;&gt;Open&lt;/button&gt;

    &lt;div x-show=&quot;isOpen()&quot; x-on:click.away=&quot;close&quot;&gt;
        // Dropdown
    &lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
    function dropdown() {
        return {
            show: false,
            open() { this.show = true },
            close() { this.show = false },
            isOpen() { return this.show === true },
        }
    }
&lt;/script&gt;
</code></pre>
    <blockquote>
        <p><strong>For bundler users</strong>, note that Alpine.js accesses functions that are in the global scope
            (<code>window</code>), you&#39;ll need to explicitly assign your functions to <code>window</code> in order
            to use them with <code>x-data</code> for example <code>window.dropdown = function () {}</code> (this is
            because with Webpack, Rollup, Parcel etc. <code>function</code>&#39;s you define will default to the
            module&#39;s scope not <code>window</code>).</p>
    </blockquote>
    <p>You can also mix-in multiple data objects using object destructuring:</p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{...dropdown(), ...tabs()}&quot;&gt;
</code></pre>
    <hr>
    <h3 id="x-init"><code>x-init</code></h3>
    <p><strong>Example:</strong> <code>&lt;div x-data=&quot;{ foo: &#39;bar&#39; }&quot; x-init=&quot;foo =
            &#39;baz&#39;&quot;&gt;&lt;/div&gt;</code></p>
    <p><strong>Structure:</strong> <code>&lt;div x-data=&quot;...&quot;
            x-init=&quot;[expression]&quot;&gt;&lt;/div&gt;</code></p>
    <p><code>x-init</code> runs an expression when a component is initialized.</p>
    <p>If you wish to run code AFTER Alpine has made its initial updates to the DOM (something like a
        <code>mounted()</code> hook in VueJS), you can return a callback from <code>x-init</code>, and it will be run
        after:</p>
    <p><code>x-init=&quot;() =&gt; { // we have access to the post-dom-initialization state here // }&quot;</code></p>
    <hr>
    <h3 id="x-show"><code>x-show</code></h3>
    <p><strong>Example:</strong> <code>&lt;div x-show=&quot;open&quot;&gt;&lt;/div&gt;</code></p>
    <p><strong>Structure:</strong> <code>&lt;div x-show=&quot;[expression]&quot;&gt;&lt;/div&gt;</code></p>
    <p><code>x-show</code> toggles the <code>display: none;</code> style on the element depending if the expression
        resolves to <code>true</code> or <code>false</code>.</p>
    <p><strong>x-show.transition</strong></p>
    <p><code>x-show.transition</code> is a convenience API for making your <code>x-show</code>s more pleasant using CSS
        transitions.</p>
    <pre><code class="lang-html">&lt;div x-show.transition=&quot;open&quot;&gt;
    These contents will be transitioned in and out.
&lt;/div&gt;
</code></pre>
    <table>
        <thead>
            <tr>
                <th>Directive</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>x-show.transition</code></td>
                <td>A simultaneous fade and scale. (opacity, scale: 0.95, timing-function: cubic-bezier(0.4, 0.0, 0.2,
                    1), duration-in: 150ms, duration-out: 75ms)</td>
            </tr>
            <tr>
                <td><code>x-show.transition.in</code></td>
                <td>Only transition in.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.out</code></td>
                <td>Only transition out.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.opacity</code></td>
                <td>Only use the fade.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.scale</code></td>
                <td>Only use the scale.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.scale.75</code></td>
                <td>Customize the CSS scale transform <code>transform: scale(.75)</code>.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.duration.200ms</code></td>
                <td>Sets the &quot;in&quot; transition to 200ms. The out will be set to half that (100ms).</td>
            </tr>
            <tr>
                <td><code>x-show.transition.origin.top.right</code></td>
                <td>Customize the CSS transform origin <code>transform-origin: top right</code>.</td>
            </tr>
            <tr>
                <td><code>x-show.transition.in.duration.200ms.out.duration.50ms</code></td>
                <td>Different durations for &quot;in&quot; and &quot;out&quot;.</td>
            </tr>
        </tbody>
    </table>
    <blockquote>
        <p>Note: All of these transition modifiers can be used in conjunction with each other. This is possible
            (although ridiculous lol):
            <code>x-show.transition.in.duration.100ms.origin.top.right.opacity.scale.85.out.duration.200ms.origin.bottom.left.opacity.scale.95</code>
        </p>
    </blockquote>
    <blockquote>
        <p>Note: <code>x-show</code> will wait for any children to finish transitioning out. If you want to bypass this
            behavior, add the <code>.immediate</code> modifier:<br><code>`</code>html</p>
    </blockquote>
    <p>&lt;div x-show.immediate=&quot;open&quot;&gt;<br> &lt;div
        x-show.transition=&quot;open&quot;&gt;<br>&lt;/div&gt;<br><code>---

            ### `x-bind`

            &gt; Note: You are free to use the shorter &quot;:&quot; syntax: `:type=&quot;...&quot;`.

            **Example:** `&lt;input x-bind:type=&quot;inputType&quot;&gt;`

            **Structure:** `&lt;input x-bind:[attribute]=&quot;[expression]&quot;&gt;`

            `x-bind` sets the value of an attribute to the result of a JavaScript expression. The expression has access
            to all the keys of the component&#39;s data object, and will update every-time its data is updated.

            &gt; Note: attribute bindings ONLY update when their dependencies update. The framework is smart enough to
            observe data changes and detect which bindings care about them.

            **`x-bind` for class attributes**

            `x-bind` behaves a little differently when binding to the `class` attribute.

            For classes, you pass in an object whose keys are class names, and values are boolean expressions to
            determine if those class names are applied or not.

            For example:
            `&lt;div x-bind:class=&quot;{ &#39;hidden&#39;: foo }&quot;&gt;&lt;/div&gt;`

            In this example, the &quot;hidden&quot; class will only be applied when the value of the `foo` data
            attribute is `true`.

            **`x-bind` for boolean attributes**

            `x-bind` supports boolean attributes in the same way as value attributes, using a variable as the condition
            or any JavaScript expression that resolves to `true` or `false`.

            For example:</code>html<br>&lt;!-- Given: --&gt;<br>&lt;button x-bind:disabled=&quot;myVar&quot;&gt;Click
        me&lt;/button&gt;<br><br>&lt;!-- When myVar == true: --&gt;<br>&lt;button disabled=&quot;disabled&quot;&gt;Click
        me&lt;/button&gt;<br><br>&lt;!-- When myVar == false: --&gt;<br>&lt;button&gt;Click
        me&lt;/button&gt;<br><code>This will add or remove the `disabled` attribute when `myVar` is true or false
            respectively.

            Boolean attributes are supported as per the [HTML
            specification](https://html.spec.whatwg.org/multipage/indices.html#attributes-3:boolean-attribute), for
            example `disabled`, `readonly`, `required`, `checked`, `hidden`, `selected`, `open`, etc.

            &gt; Note: If you need a false state to show for your attribute, such as `aria-*`, chain `.toString()` to
            the value while binding to the attribute. For example: `:aria-expanded=&quot;isOpen.toString()&quot;` would
            persist whether `isOpen` was `true` or `false`.

            **`.camel` modifier**
            **Example:** `&lt;svg x-bind:view-box.camel=&quot;viewBox&quot;&gt;`

            The `camel` modifier will bind to the camel case equivalent of the attribute name. In the example above, the
            value of `viewBox` will be bound the `viewBox` attribute as opposed to the `view-box` attribute.

            ---

            ### `x-on`

            &gt; Note: You are free to use the shorter &quot;@&quot; syntax: `@click=&quot;...&quot;`.

            **Example:** `&lt;button x-on:click=&quot;foo = &#39;bar&#39;&quot;&gt;&lt;/button&gt;`

            **Structure:** `&lt;button x-on:[event]=&quot;[expression]&quot;&gt;&lt;/button&gt;`

            `x-on` attaches an event listener to the element it&#39;s declared on. When that event is emitted, the
            JavaScript expression set as its value is executed. You can use `x-on` with any event available for the
            element you&#39;re adding the directive on, for a full list of events, see [the Event reference on
            MDN](https://developer.mozilla.org/en-US/docs/Web/Events) for a list of possible values.

            If any data is modified in the expression, other element attributes &quot;bound&quot; to this data, will be
            updated.

            &gt; Note: You can also specify a JavaScript function name.

            **Example:** `&lt;button x-on:click=&quot;myFunction&quot;&gt;&lt;/button&gt;`

            This is equivalent to: `&lt;button x-on:click=&quot;myFunction($event)&quot;&gt;&lt;/button&gt;`

            **`keydown` modifiers**

            **Example:** `&lt;input type=&quot;text&quot; x-on:keydown.escape=&quot;open = false&quot;&gt;`

            You can specify specific keys to listen for using keydown modifiers appended to the `x-on:keydown`
            directive. Note that the modifiers are kebab-cased versions of `Event.key` values.

            Examples: `enter`, `escape`, `arrow-up`, `arrow-down`

            &gt; Note: You can also listen for system-modifier key combinations like:
            `x-on:keydown.cmd.enter=&quot;foo&quot;`

            **`.away` modifier**

            **Example:** `&lt;div x-on:click.away=&quot;showModal = false&quot;&gt;&lt;/div&gt;`

            When the `.away` modifier is present, the event handler will only be executed when the event originates from
            a source other than itself, or its children.

            This is useful for hiding dropdowns and modals when a user clicks away from them.

            **`.prevent` modifier**
            **Example:** `&lt;input type=&quot;checkbox&quot; x-on:click.prevent&gt;`

            Adding `.prevent` to an event listener will call `preventDefault` on the triggered event. In the above
            example, this means the checkbox wouldn&#39;t actually get checked when a user clicks on it.

            **`.stop` modifier**
            **Example:** `&lt;div x-on:click=&quot;foo = &#39;bar&#39;&quot;&gt;&lt;button
            x-on:click.stop&gt;&lt;/button&gt;&lt;/div&gt;`

            Adding `.stop` to an event listener will call `stopPropagation` on the triggered event. In the above
            example, this means the &quot;click&quot; event won&#39;t bubble from the button to the outer `&lt;div&gt;`.
            Or in other words, when a user clicks the button, `foo` won&#39;t be set to `&#39;bar&#39;`.

            **`.self` modifier**
            **Example:** `&lt;div x-on:click.self=&quot;foo =
            &#39;bar&#39;&quot;&gt;&lt;button&gt;&lt;/button&gt;&lt;/div&gt;`

            Adding `.self` to an event listener will only trigger the handler if the `$event.target` is the element
            itself. In the above example, this means the &quot;click&quot; event that bubbles from the button to the
            outer `&lt;div&gt;` will **not** run the handler.

            **`.window` modifier**
            **Example:** `&lt;div x-on:resize.window=&quot;isOpen = window.outerWidth &gt; 768 ? false :
            open&quot;&gt;&lt;/div&gt;`

            Adding `.window` to an event listener will install the listener on the global window object instead of the
            DOM node on which it is declared. This is useful for when you want to modify component state when something
            changes with the window, like the resize event. In this example, when the window grows larger than 768
            pixels wide, we will close the modal/dropdown, otherwise maintain the same state.

            &gt;Note: You can also use the `.document` modifier to attach listeners to `document` instead of `window`

            **`.once` modifier**
            **Example:** `&lt;button x-on:mouseenter.once=&quot;fetchSomething()&quot;&gt;&lt;/button&gt;`

            Adding the `.once` modifier to an event listener will ensure that the listener will only be handled once.
            This is useful for things you only want to do once, like fetching HTML partials and such.

            **`.passive` modifier**
            **Example:** `&lt;button x-on:mousedown.passive=&quot;interactive = true&quot;&gt;&lt;/button&gt;`

            Adding the `.passive` modifier to an event listener will make the listener a passive one, which means
            `preventDefault()` will not work on any events being processed, this can help, for example with scroll
            performance on touch devices.

            **`.debounce` modifier**
            **Example:** `&lt;input x-on:input.debounce=&quot;fetchSomething()&quot;&gt;`

            The `debounce` modifier allows you to &quot;debounce&quot; an event handler. In other words, the event
            handler will NOT run until a certain amount of time has elapsed since the last event that fired. When the
            handler is ready to be called, the last handler call will execute.

            The default debounce &quot;wait&quot; time is 250 milliseconds.

            If you wish to customize this, you can specify a custom wait time like so:</code><br>&lt;input
        x-on:input.debounce.750=&quot;fetchSomething()&quot;&gt;<br>&lt;input
        x-on:input.debounce.750ms=&quot;fetchSomething()&quot;&gt;<br><code>**`.camel` modifier**
            **Example:** `&lt;input x-on:event-name.camel=&quot;doSomething()&quot;&gt;`

            The `camel` modifier will attach an event listener for the camel case equivalent event name. In the example
            above, the expression will be evaluated when the `eventName` event is fired on the element.

            ---

            ### `x-model`
            **Example:** `&lt;input type=&quot;text&quot; x-model=&quot;foo&quot;&gt;`

            **Structure:** `&lt;input type=&quot;text&quot; x-model=&quot;[data item]&quot;&gt;`

            `x-model` adds &quot;two-way data binding&quot; to an element. In other words, the value of the input
            element will be kept in sync with the value of the data item of the component.

            &gt; Note: `x-model` is smart enough to detect changes on text inputs, checkboxes, radio buttons, textareas,
            selects, and multiple selects. It should behave [how Vue would](https://vuejs.org/v2/guide/forms.html) in
            those scenarios.

            **`.number` modifier**
            **Example:** `&lt;input x-model.number=&quot;age&quot;&gt;`

            The `number` modifier will convert the input&#39;s value to a number. If the value cannot be parsed as a
            valid number, the original value is returned.

            **`.debounce` modifier**
            **Example:** `&lt;input x-model.debounce=&quot;search&quot;&gt;`

            The `debounce` modifier allows you to add a &quot;debounce&quot; to a value update. In other words, the
            event handler will NOT run until a certain amount of time has elapsed since the last event that fired. When
            the handler is ready to be called, the last handler call will execute.

            The default debounce &quot;wait&quot; time is 250 milliseconds.

            If you wish to customize this, you can specifiy a custom wait time like so:</code><br>&lt;input
        x-model.debounce.750=&quot;search&quot;&gt;<br>&lt;input
        x-model.debounce.750ms=&quot;search&quot;&gt;<br><code>---

            ### `x-text`
            **Example:** `&lt;span x-text=&quot;foo&quot;&gt;&lt;/span&gt;`

            **Structure:** `&lt;span x-text=&quot;[expression]&quot;`

            `x-text` works similarly to `x-bind`, except instead of updating the value of an attribute, it will update
            the `innerText` of an element.

            ---

            ### `x-html`
            **Example:** `&lt;span x-html=&quot;foo&quot;&gt;&lt;/span&gt;`

            **Structure:** `&lt;span x-html=&quot;[expression]&quot;`

            `x-html` works similarly to `x-bind`, except instead of updating the value of an attribute, it will update
            the `innerHTML` of an element.

            &gt; :warning: **Only use on trusted content and never on user-provided content.** :warning:
            &gt;
            &gt; Dynamically rendering HTML from third parties can easily lead to
            [XSS](https://developer.mozilla.org/en-US/docs/Glossary/Cross-site_scripting) vulnerabilities.

            ---

            ### `x-ref`
            **Example:** `&lt;div x-ref=&quot;foo&quot;&gt;&lt;/div&gt;&lt;button x-on:click=&quot;$refs.foo.innerText =
            &#39;bar&#39;&quot;&gt;&lt;/button&gt;`

            **Structure:** `&lt;div x-ref=&quot;[ref name]&quot;&gt;&lt;/div&gt;&lt;button x-on:click=&quot;$refs.[ref
            name].innerText = &#39;bar&#39;&quot;&gt;&lt;/button&gt;`

            `x-ref` provides a convenient way to retrieve raw DOM elements out of your component. By setting an `x-ref`
            attribute on an element, you are making it available to all event handlers inside an object called `$refs`.

            This is a helpful alternative to setting ids and using `document.querySelector` all over the place.

            &gt; Note: you can also bind dynamic values for x-ref: `&lt;span
            :x-ref=&quot;item.id&quot;&gt;&lt;/span&gt;` if you need to.

            ---

            ### `x-if`
            **Example:** `&lt;template x-if=&quot;true&quot;&gt;&lt;div&gt;Some Element&lt;/div&gt;&lt;/template&gt;`

            **Structure:** `&lt;template x-if=&quot;[expression]&quot;&gt;&lt;div&gt;Some
            Element&lt;/div&gt;&lt;/template&gt;`

            For cases where `x-show` isn&#39;t sufficient (`x-show` sets an element to `display: none` if it&#39;s
            false), `x-if` can be used to actually remove an element completely from the DOM.

            It&#39;s important that `x-if` is used on a `&lt;template&gt;&lt;/template&gt;` tag because Alpine
            doesn&#39;t use a virtual DOM. This implementation allows Alpine to stay rugged and use the real DOM to work
            its magic.

            &gt; Note: `x-if` must have a single root element inside the `&lt;template&gt;&lt;/template&gt;` tag.

            &gt; Note: When using `template` in a `svg` tag, you need to add a
            [polyfill](https://github.com/alpinejs/alpine/issues/637#issuecomment-654856538) that should be run before
            Alpine.js is initialized.

            ---

            ### `x-for`
            **Example:**</code>html<br>&lt;template x-for=&quot;item in items&quot; :key=&quot;item&quot;&gt;<br>
        &lt;div x-text=&quot;item&quot;&gt;&lt;/div&gt;<br>&lt;/template&gt;<br><code>&gt; Note: the `:key` binding is
            optional, but HIGHLY recommended.

            `x-for` is available for cases when you want to create new DOM nodes for each item in an array. This should
            appear similar to `v-for` in Vue, with one exception of needing to exist on a `template` tag, and not a
            regular DOM element.

            If you want to access the current index of the iteration, use the following
            syntax:</code>html<br>&lt;template x-for=&quot;(item, index) in items&quot; :key=&quot;index&quot;&gt;<br>
        &lt;!-- You can also reference &quot;index&quot; inside the iteration if you need. --&gt;<br> &lt;div
        x-text=&quot;index&quot;&gt;&lt;/div&gt;<br>&lt;/template&gt;<br><code>If you want to access the array object
            (collection) of the iteration, use the following syntax:</code>html<br>&lt;template x-for=&quot;(item,
        index, collection) in items&quot; :key=&quot;index&quot;&gt;<br> &lt;div&gt;<br> &lt;!-- You can also reference
        &quot;collection&quot; inside the iteration if you need. --&gt;<br> &lt;!-- Current item. --&gt;<br> &lt;div
        x-text=&quot;item&quot;&gt;&lt;/div&gt;<br> &lt;!-- Same as above. --&gt;<br> &lt;div
        x-text=&quot;collection[index]&quot;&gt;&lt;/div&gt;<br> &lt;!-- Previous item. --&gt;<br> &lt;div
        x-text=&quot;collection[index - 1]&quot;&gt;&lt;/div&gt;<br> &lt;/div&gt;<br>&lt;/template&gt;<br><code>&gt;
            Note: `x-for` must have a single root element inside of the `&lt;template&gt;&lt;/template&gt;` tag.

            &gt; Note: When using `template` in a `svg` tag, you need to add a
            [polyfill](https://github.com/alpinejs/alpine/issues/637#issuecomment-654856538) that should be run before
            Alpine.js is initialized.

            #### Nesting `x-for`s
            You can nest `x-for` loops, but you MUST wrap each loop in an element. For
            example:</code>html<br>&lt;template x-for=&quot;item in items&quot;&gt;<br> &lt;div&gt;<br> &lt;template
        x-for=&quot;subItem in item.subItems&quot;&gt;<br> &lt;div x-text=&quot;subItem&quot;&gt;&lt;/div&gt;<br>
        &lt;/template&gt;<br> &lt;/div&gt;<br>&lt;/template&gt;<br><code>#### Iterating over a range

            Alpine supports the `i in n` syntax, where `n` is an integer, allowing you to iterate over a fixed range of
            elements.</code>html<br>&lt;template x-for=&quot;i in 10&quot;&gt;<br> &lt;span
        x-text=&quot;i&quot;&gt;&lt;/span&gt;<br>&lt;/template&gt;<br><code>---

            ### `x-transition`
            **Example:**</code>html<br>&lt;div
        x-show=&quot;open&quot;
        x-transition:enter=&quot;transition ease-out duration-300&quot;
        x-transition:enter-start=&quot;opacity-0 transform scale-90&quot;
        x-transition:enter-end=&quot;opacity-100 transform scale-100&quot;
        x-transition:leave=&quot;transition ease-in duration-300&quot;
        x-transition:leave-start=&quot;opacity-100 transform scale-100&quot;
        x-transition:leave-end=&quot;opacity-0 transform scale-90&quot;
        &gt;...&lt;/div&gt;<br><code></code>html<br>&lt;template x-if=&quot;open&quot;&gt;<br> &lt;div
        x-transition:enter=&quot;transition ease-out duration-300&quot;
        x-transition:enter-start=&quot;opacity-0 transform scale-90&quot;
        x-transition:enter-end=&quot;opacity-100 transform scale-100&quot;
        x-transition:leave=&quot;transition ease-in duration-300&quot;
        x-transition:leave-start=&quot;opacity-100 transform scale-100&quot;
        x-transition:leave-end=&quot;opacity-0 transform scale-90&quot;
        &gt;...&lt;/div&gt;<br>&lt;/template&gt;<br><code>&gt; The example above uses classes from [Tailwind
            CSS](https://tailwindcss.com).

            Alpine offers 6 different transition directives for applying classes to various stages of an element&#39;s
            transition between &quot;hidden&quot; and &quot;shown&quot; states. These directives work both with `x-show`
            AND `x-if`.

            These behave exactly like VueJS&#39;s transition directives, except they have different, more sensible
            names:

            | Directive | Description |
            | --- | --- |
            | `:enter` | Applied during the entire entering phase. |
            | `:enter-start` | Added before element is inserted, removed one frame after element is inserted. |
            | `:enter-end` | Added one frame after element is inserted (at the same time `enter-start` is removed),
            removed when transition/animation finishes.
            | `:leave` | Applied during the entire leaving phase. |
            | `:leave-start` | Added immediately when a leaving transition is triggered, removed after one frame. |
            | `:leave-end` | Added one frame after a leaving transition is triggered (at the same time `leave-start` is
            removed), removed when the transition/animation finishes.

            ---

            ### `x-spread`
            **Example:**</code>html<br>&lt;div x-data=&quot;dropdown()&quot;&gt;<br> &lt;button
        x-spread=&quot;trigger&quot;&gt;Open Dropdown&lt;/button&gt;<br><br> &lt;span
        x-spread=&quot;dialogue&quot;&gt;Dropdown Contents&lt;/span&gt;<br>&lt;/div&gt;

    </p>
    <p>&lt;script&gt;<br> function dropdown() {<br> return {<br> open: false,<br> trigger: {<br> <a
            href="">&#39;@click&#39;</a> {<br> this.open = true<br> },<br> },<br> dialogue: {<br> <a
            href="">&#39;x-show&#39;</a> {<br> return this.open<br> },<br> <a href="">&#39;@click.away&#39;</a> {<br>
        this.open = false<br> },<br> }<br> }<br> }<br>&lt;/script&gt;</p>
    <pre><code>
`x-spread` allows you to extract an element&#39;s Alpine bindings into a reusable object.

The object keys are the directives (Can be any directive including modifiers), and the values are callbacks to be evaluated by Alpine.

&gt; Note: There are a couple of caveats to x-spread:
&gt; - When the directive being &quot;spread&quot; is `x-for`, you should return a normal expression string from the callback. For example: `[&#39;x-for&#39;]() { return &#39;item in items&#39; }`.
&gt; - `x-data` and `x-init` can&#39;t be used inside a &quot;spread&quot; object.

---

### `x-cloak`
**Example:** `&lt;div x-data=&quot;{}&quot; x-cloak&gt;&lt;/div&gt;`

`x-cloak` attributes are removed from elements when Alpine initializes. This is useful for hiding pre-initialized DOM. It&#39;s typical to add the following global style for this to work:

```html
&lt;style&gt;
    [x-cloak] {
        display: none !important;
    }
&lt;/style&gt;
</code></pre>
    <h3 id="magic-properties">Magic Properties</h3>
    <blockquote>
        <p>With the exception of <code>$el</code>, magic properties are <strong>not available within
                <code>x-data</code></strong> as the component isn&#39;t initialized yet.</p>
    </blockquote>
    <hr>
    <h3 id="-el"><code>$el</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div x-data&gt;
    &lt;button @click=&quot;$el.innerHTML = &#39;foo&#39;&quot;&gt;Replace me with &quot;foo&quot;&lt;/button&gt;
&lt;/div&gt;
</code></pre>
    <p><code>$el</code> is a magic property that can be used to retrieve the root component DOM node.</p>
    <h3 id="-refs"><code>$refs</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;span x-ref=&quot;foo&quot;&gt;&lt;/span&gt;

&lt;button x-on:click=&quot;$refs.foo.innerText = &#39;bar&#39;&quot;&gt;&lt;/button&gt;
</code></pre>
    <p><code>$refs</code> is a magic property that can be used to retrieve DOM elements marked with <code>x-ref</code>
        inside the component. This is useful when you need to manually manipulate DOM elements.</p>
    <hr>
    <h3 id="-event"><code>$event</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;input x-on:input=&quot;alert($event.target.value)&quot;&gt;
</code></pre>
    <p><code>$event</code> is a magic property that can be used within an event listener to retrieve the native browser
        &quot;Event&quot; object.</p>
    <blockquote>
        <p>Note: The $event property is only available in DOM expressions.</p>
    </blockquote>
    <p>If you need to access $event inside of a JavaScript function you can pass it in directly:</p>
    <p><code>&lt;button x-on:click=&quot;myFunction($event)&quot;&gt;&lt;/button&gt;</code></p>
    <hr>
    <h3 id="-dispatch"><code>$dispatch</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div @custom-event=&quot;console.log($event.detail.foo)&quot;&gt;
    &lt;button @click=&quot;$dispatch(&#39;custom-event&#39;, { foo: &#39;bar&#39; })&quot;&gt;
    &lt;!-- When clicked, will console.log &quot;bar&quot; --&gt;
&lt;/div&gt;
</code></pre>
    <p><strong>Note on Event Propagation</strong></p>
    <p>Notice that, because of <a href="https://en.wikipedia.org/wiki/Event_bubbling">event bubbling</a>, when you need
        to capture events dispatched from nodes that are under the same nesting hierarchy, you&#39;ll need to use the <a
            href="https://github.com/alpinejs/alpine#x-on"><code>.window</code></a> modifier:</p>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div x-data&gt;
    &lt;span @custom-event=&quot;console.log($event.detail.foo)&quot;&gt;&lt;/span&gt;
    &lt;button @click=&quot;$dispatch(&#39;custom-event&#39;, { foo: &#39;bar&#39; })&quot;&gt;
&lt;div&gt;
</code></pre>
    <blockquote>
        <p>This won&#39;t work because when <code>custom-event</code> is dispatched, it&#39;ll propagate to its common
            ancestor, the <code>div</code>.</p>
    </blockquote>
    <p><strong>Dispatching to Components</strong></p>
    <p>You can also take advantage of the previous technique to make your components talk to each other:</p>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div x-data @custom-event.window=&quot;console.log($event.detail)&quot;&gt;&lt;/div&gt;

&lt;button x-data @click=&quot;$dispatch(&#39;custom-event&#39;, &#39;Hello World!&#39;)&quot;&gt;
&lt;!-- When clicked, will console.log &quot;Hello World!&quot;. --&gt;
</code></pre>
    <p><code>$dispatch</code> is a shortcut for creating a <code>CustomEvent</code> and dispatching it using
        <code>.dispatchEvent()</code> internally. There are lots of good use cases for passing data around and between
        components using custom events. <a
            href="https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Creating_and_triggering_events">Read
            here</a> for more information on the underlying <code>CustomEvent</code> system in browsers.</p>
    <p>You will notice that any data passed as the second parameter to <code>$dispatch(&#39;some-event&#39;, { some:
            &#39;data&#39; })</code>, becomes available through the new events &quot;detail&quot; property:
        <code>$event.detail.some</code>. Attaching custom event data to the <code>.detail</code> property is standard
        practice for <code>CustomEvent</code>s in browsers. <a
            href="https://developer.mozilla.org/en-US/docs/Web/API/CustomEvent/detail">Read here</a> for more info.</p>
    <p>You can also use <code>$dispatch()</code> to trigger data updates for <code>x-model</code> bindings. For example:
    </p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ foo: &#39;bar&#39; }&quot;&gt;
    &lt;span x-model=&quot;foo&quot;&gt;
        &lt;button @click=&quot;$dispatch(&#39;input&#39;, &#39;baz&#39;)&quot;&gt;
        &lt;!-- After the button is clicked, `x-model` will catch the bubbling &quot;input&quot; event, and update foo to &quot;baz&quot;. --&gt;
    &lt;/span&gt;
&lt;/div&gt;
</code></pre>
    <blockquote>
        <p>Note: The $dispatch property is only available in DOM expressions.</p>
    </blockquote>
    <p>If you need to access $dispatch inside of a JavaScript function you can pass it in directly:</p>
    <p><code>&lt;button x-on:click=&quot;myFunction($dispatch)&quot;&gt;&lt;/button&gt;</code></p>
    <hr>
    <h3 id="-nexttick"><code>$nextTick</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ fruit: &#39;apple&#39; }&quot;&gt;
    &lt;button
        x-on:click=&quot;
            fruit = &#39;pear&#39;;
            $nextTick(() =&gt; { console.log($event.target.innerText) });
        &quot;
        x-text=&quot;fruit&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
</code></pre>
    <p><code>$nextTick</code> is a magic property that allows you to only execute a given expression AFTER Alpine has
        made its reactive DOM updates. This is useful for times you want to interact with the DOM state AFTER it&#39;s
        reflected any data updates you&#39;ve made.</p>
    <hr>
    <h3 id="-watch"><code>$watch</code></h3>
    <p><strong>Example:</strong></p>
    <pre><code class="lang-html">&lt;div x-data=&quot;{ open: false }&quot; x-init=&quot;$watch(&#39;open&#39;, value =&gt; console.log(value))&quot;&gt;
    &lt;button @click=&quot;open = ! open&quot;&gt;Toggle Open&lt;/button&gt;
&lt;/div&gt;
</code></pre>
    <p>You can &quot;watch&quot; a component property with the <code>$watch</code> magic method. In the above example,
        when the button is clicked and <code>open</code> is changed, the provided callback will fire and
        <code>console.log</code> the new value.</p>
    <h2 id="security">Security</h2>
    <p>If you find a security vulnerability, please send an email to <a href="">calebporzio@gmail.com</a>.</p>
    <p>Alpine relies on a custom implementation using the <code>Function</code> object to evaluate its directives.
        Despite being more secure then <code>eval()</code>, its use is prohibited in some environments, such as Google
        Chrome App, using restrictive Content Security Policy (CSP).</p>
    <p>If you use Alpine in a website dealing with sensitive data and requiring <a
            href="https://csp.withgoogle.com/docs/strict-csp.html">CSP</a>, you need to include <code>unsafe-eval</code>
        in your policy. A robust policy correctly configured will help protecting your users when using personal or
        financial data.</p>
    <p>Since a policy applies to all scripts in your page, it&#39;s important that other external libraries included in
        the website are carefully reviewed to ensure that they are trustworthy and they won&#39;t introduce any Cross
        Site Scripting vulnerability either using the <code>eval()</code> function or manipulating the DOM to inject
        malicious code in your page.</p>
    <h2 id="v3-roadmap">V3 Roadmap</h2>
    <ul>
        <li>Move from <code>x-ref</code> to <code>ref</code> for Vue parity?</li>
        <li>Add <code>Alpine.directive()</code></li>
        <li>Add <code>Alpine.component(&#39;foo&#39;, {...})</code> (With magic <code>__init()</code> method)</li>
        <li>Dispatch Alpine events for &quot;loaded&quot;, &quot;transition-start&quot;, etc... (<a
                href="https://github.com/alpinejs/alpine/pull/299">#299</a>) ?</li>
        <li>Remove &quot;object&quot; (and array) syntax from <code>x-bind:class=&quot;{ &#39;foo&#39;: true
                }&quot;</code> (<a href="https://github.com/alpinejs/alpine/pull/236">#236</a> to add support for object
            syntax for the <code>style</code> attribute)</li>
        <li>Improve <code>x-for</code> mutation reactivity (<a
                href="https://github.com/alpinejs/alpine/pull/165">#165</a>)</li>
        <li>Add &quot;deep watching&quot; support in V3 (<a href="https://github.com/alpinejs/alpine/pull/294">#294</a>)
        </li>
        <li>Add <code>$el</code> shortcut</li>
        <li>Change <a href="mailto:`@click.away">`@click.away</a><code>to</code>@click.outside`?</li>
    </ul>
    <h2 id="license">License</h2>
    <p>Copyright © 2019-2020 Caleb Porzio and contributors</p>
    <p>Licensed under the MIT license, see <a href="LICENSE.md">LICENSE.md</a> for details.</p>
