<div 
    x-data="{ open: false, messages: [], newMessage: '' }" 
    class="fixed bottom-4 right-4 z-50"
>
    <!-- Chatbot Toggle Button -->
    <button 
        @click="open = !open" 
        class="bg-primary text-white px-4 py-2 rounded-full shadow-lg hover:bg-primary/90 focus:outline-none"
    >
        <span x-show="!open">💬 Chat</span>
        <span x-show="open">✖ Close</span>
    </button>

    <!-- Chatbot Window -->
    <div 
        x-show="open" 
        x-transition 
        class="mt-2 w-80 h-96 bg-white border border-gray-200 rounded-lg shadow-lg flex flex-col"
    >
        <!-- Header -->
        <div class="bg-primary text-white p-3 rounded-t-lg font-semibold">
            🤖 Job Axis Chatbot
        </div>

        <!-- Messages -->
        <div class="flex-1 p-3 overflow-y-auto space-y-2 text-sm">
            <template x-for="message in messages" :key="message.id">
                <div 
                    :class="message.from === 'user' 
                        ? 'text-right' 
                        : 'text-left'"
                >
                    <span 
                        :class="message.from === 'user' 
                            ? 'bg-primary text-white px-3 py-1 rounded-lg inline-block' 
                            : 'bg-gray-200 text-gray-800 px-3 py-1 rounded-lg inline-block'"
                        x-text="message.text"
                    ></span>
                </div>
            </template>
        </div>

        <!-- Input -->
        <div class="p-3 border-t border-gray-200 flex items-center space-x-2">
            <input 
                type="text" 
                x-model="newMessage" 
                @keydown.enter="
                    if(newMessage.trim() !== '') {
                        messages.push({ id: Date.now(), text: newMessage, from: 'user' });
                        newMessage = '';
                        // simple bot reply
                        setTimeout(() => {
                            messages.push({ id: Date.now()+1, text: 'Thanks for your message! We will get back to you soon.', from: 'bot' });
                        }, 500);
                    }
                "
                class="flex-1 border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-primary"
                placeholder="Type a message..."
            >
            <button 
                @click="
                    if(newMessage.trim() !== '') {
                        messages.push({ id: Date.now(), text: newMessage, from: 'user' });
                        newMessage = '';
                        setTimeout(() => {
                            messages.push({ id: Date.now()+1, text: 'Thanks for your message! We will get back to you soon.', from: 'bot' });
                        }, 500);
                    }
                "
                class="bg-primary text-white px-3 py-2 rounded-lg hover:bg-primary/90"
            >
                Send
            </button>
        </div>
    </div>
</div>
