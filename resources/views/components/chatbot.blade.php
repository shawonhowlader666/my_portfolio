<div x-data="chatbot()" x-effect="initChat()" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
    
    <!-- Chat Window -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-10 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-10 scale-95"
         class="mb-4 w-[350px] max-w-[90vw] bg-[#0f172a]/90 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl overflow-hidden flex flex-col"
         style="height: 500px; display: none;">
        
        <!-- Header -->
        <div class="p-4 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 border-b border-white/5 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-[#0f172a] rounded-full"></span>
                </div>
                <div>
                    <h3 class="font-bold text-white text-sm">Shawon's AI</h3>
                    <p class="text-xs text-cyan-400">Online & Ready to Help</p>
                </div>
            </div>
            <button @click="isOpen = false" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 p-4 overflow-y-auto space-y-4 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-transparent" id="chat-messages">
            <template x-for="(msg, index) in messages" :key="index">
                <div>
                   <div :class="msg.isUser ? 'flex justify-end' : 'flex justify-start'">
                        <div :class="msg.isUser ? 'bg-blue-600 text-white rounded-br-none' : 'bg-gray-800/80 text-gray-200 rounded-bl-none'"
                             class="max-w-[80%] p-3 rounded-2xl text-sm shadow-sm animate-fade-in-up">
                            <p x-html="msg.text"></p>
                        </div>
                    </div>

                    <!-- Show Options ONLY after the VERY FIRST message (Welcome Message) -->
                    <div x-show="index === 0 && !msg.isUser" class="flex flex-wrap gap-2 mt-3 ml-1 animate-fade-in-up" style="animation-delay: 0.2s">
                         <template x-for="option in options" :key="option.label">
                            <button @click="handleOption(option)" 
                                    class="px-3 py-1.5 text-xs bg-gray-800/50 hover:bg-cyan-600/20 hover:text-cyan-400 border border-cyan-500/20 rounded-full transition-all duration-300 backdrop-blur-sm">
                                <span x-text="option.label"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </template>
            <div x-show="isTyping" class="flex justify-start animate-pulse">
                <div class="bg-gray-800/50 p-3 rounded-2xl rounded-bl-none flex gap-1">
                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce"></span>
                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.1s"></span>
                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                </div>
            </div>
        </div>

        <!-- Input Area (Fixed) -->
        <div class="p-4 border-t border-white/5 bg-gray-900/50">
            <div class="relative">
                <input type="text" 
                       x-model="userInput" 
                       @keydown.enter="sendMessage()"
                       placeholder="Type a message..." 
                       class="w-full bg-gray-950/50 border border-white/10 rounded-full pl-4 pr-10 py-2.5 text-sm text-white focus:outline-none focus:border-cyan-500/50 focus:ring-1 focus:ring-cyan-500/50 transition-all">
                <button @click="sendMessage()" class="absolute right-2 top-1/2 -translate-y-1/2 text-cyan-500 hover:text-cyan-400 p-1 transition-transform duration-200 hover:scale-110">
                    <svg class="w-5 h-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Welcome Notification (Toast) -->
    <div x-show="showNotification && !isOpen" 
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         class="absolute bottom-20 right-0 w-64 bg-gradient-to-r from-blue-600 to-cyan-600 text-white p-4 rounded-xl shadow-lg border border-white/20 pointer-events-auto">
        <div class="relative">
            <!-- Arrow -->
            <div class="absolute -bottom-6 right-6 w-4 h-4 bg-cyan-600 rotate-45 transform skew-x-12"></div>
            
            <div class="flex justify-between items-start">
                <div>
                    <h5 class="font-bold text-sm mb-1">Hi there! 👋</h5>
                    <p class="text-xs text-blue-100 leading-relaxed">I'm Shawon's AI assistant. Click here to ask me anything!</p>
                </div>
                <button @click="showNotification = false" class="text-blue-200 hover:text-white">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Toggle Button (Fixed Bottom Right) -->
    <button @click="isOpen = !isOpen; showNotification = false" 
            class="group relative flex items-center justify-center w-14 h-14 bg-[#0f172a]/80 backdrop-blur-md border border-white/10 text-white rounded-full shadow-[0_0_20px_rgba(6,182,212,0.3)] hover:shadow-[0_0_30px_rgba(6,182,212,0.5)] hover:scale-110 transition-all duration-300">
        <!-- Ping Effect -->
        <span class="absolute top-0 right-0 -mr-1 -mt-1 w-3 h-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
        </span>
        
        <!-- Icon -->
        <div class="relative">
            <!-- Headset Icon (Default) -->
            <svg x-show="!isOpen" class="w-6 h-6 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <!-- Simpler headset icon replacement for better visibility -->
                <path d="M3 18v-6a9 9 0 0118 0v6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <!-- Close Icon (When Open) -->
            <svg x-show="isOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </button>
</div>

<script>
    function chatbot() {
        return {
            isOpen: false,
            showNotification: false,
            userInput: '',
            isTyping: false,
            messages: [
                { text: "Hi there! 👋 I'm Shawon's virtual assistant. How can I help you today?", isUser: false }
            ],
            options: [
                { label: "My Skills 💻", value: "skills" },
                { label: "Contact Info 📧", value: "contact" },
                { label: "Recent Projects 🚀", value: "projects" },
                { label: "Hire Me! 💼", value: "hire" }
            ],
            
            initChat() {
                // Show notification after 3 seconds
                setTimeout(() => {
                    if (!this.isOpen) {
                        this.showNotification = true;
                    }
                }, 3000);

                // Auto scroll to bottom when messages change
                this.$watch('messages', () => {
                    this.$nextTick(() => {
                        const chatBox = document.getElementById('chat-messages');
                        chatBox.scrollTop = chatBox.scrollHeight;
                    });
                });
            },

            handleOption(option) {
                this.addMessage(option.label, true);
                this.processInput(option.value);
            },

            sendMessage() {
                if (this.userInput.trim() === '') return;
                const text = this.userInput;
                this.addMessage(text, true);
                this.userInput = '';
                this.processInput(text.toLowerCase());
            },

            addMessage(text, isUser) {
                this.messages.push({ text, isUser });
            },

            async processInput(input) {
                this.isTyping = true;
                
                try {
                    const response = await fetch('/chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ message: input })
                    });

                    const data = await response.json();
                    
                    this.isTyping = false;
                    
                    // Format the response (simple bolding)
                    let formattedReply = data.reply.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>');
                    
                    this.addMessage(formattedReply, false);

                } catch (error) {
                    this.isTyping = false;
                    this.addMessage("Sorry, I'm having trouble connecting to my brain right now. Please try again later!", false);
                    console.error('Chatbot Error:', error);
                }
            }
        }
    }
</script>
