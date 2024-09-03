<aside class="block bg-gray-100 w-96 overflow-y-auto border-l border-gray-200 px-4 py-6 sm:px-6 lg:px-8">

    <x-wirebook::support.tabs>
        <x-slot:list>
            <x-wirebook::support.tabs.item>
                Controls
            </x-wirebook::support.tabs.item>
            <x-wirebook::support.tabs.item>
                Source
            </x-wirebook::support.tabs.item>
        </x-slot:list>

        <x-wirebook::support.tabs.panel class="py-8 px-4">
            <div  id="controls" >

            </div>
        </x-wirebook::support.tabs.panel>



        <x-wirebook::support.tabs.panel>
            <pre class="overflow-y-auto">
                <code class="language-html" id="code"></code>
            </pre>
        </x-wirebook::support.tabs.panel>

    </x-wirebook::support.tabs>

</aside>
