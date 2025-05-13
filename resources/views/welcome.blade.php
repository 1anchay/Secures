<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureShield - Защита конфиденциальной информации веб-сайтов</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f0f13;
            color: #ffffff;
        }
        
        .tech-bg {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(0, 100, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(0, 200, 255, 0.1) 0%, transparent 50%);
        }
        
        .glow-text {
            text-shadow: 0 0 10px rgba(0, 150, 255, 0.7);
        }
        
        .security-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 150, 255, 0.1);
            position: relative;
            overflow: hidden;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
        }
        
        .security-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 150, 255, 0.2);
        }
        
        .encryption-animation {
            position: relative;
            height: 300px;
            overflow: hidden;
        }
        
        .data-particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: rgba(0, 200, 255, 0.7);
            border-radius: 50%;
            animation: float 5s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(10px); }
        }
        
        .shield-icon {
            filter: drop-shadow(0 0 8px rgba(0, 150, 255, 0.7));
        }
        
        .hacker-attack {
            position: relative;
            width: 100%;
            height: 200px;
            border: 2px dashed rgba(255, 50, 50, 0.5);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .attack-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 50, 50, 0.8), transparent);
            animation: attack 3s infinite;
        }
        
        @keyframes attack {
            0% { width: 0; left: 0; opacity: 0; }
            50% { width: 100%; left: 0; opacity: 1; }
            100% { width: 0; left: 100%; opacity: 0; }
        }
        
        .protected-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0, 200, 255, 0.8), transparent);
            animation: protect 3s infinite;
            transform-origin: left;
        }
        
        @keyframes protect {
            0% { transform: scaleX(0); opacity: 0; }
            50% { transform: scaleX(1); opacity: 1; }
            100% { transform: scaleX(0); opacity: 0; }
        }
    </style>
</head>
<body class="bg-gray-900">
    <!-- Header -->
    @include('header')

    <!-- Hero Section -->
    <section class="tech-bg py-20 md:py-32 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full bg-repeat opacity-30" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNNTAgMEwxMDAgMjVMOTAgNzVMNTAgMTAwTDEwIDc1TDAgMjVMNTAgMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDA5NWZmIiBzdHJva2Utd2lkdGg9IjAuNSIvPjwvc3ZnPg==');"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="text-center lg:text-left max-w-2xl">
                    <div class="mb-6 flex justify-center lg:justify-start">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-gray-800 border border-blue-400/30 text-blue-400 text-sm font-medium">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg>
                            Защита данных уровня Enterprise
                        </span>
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 text-white">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">Защита</span>
                        <br>конфиденциальных данных
                    </h1>
                    
                    <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed">
                        Комплексная система защиты веб-сайтов от утечек информации, хакерских атак 
                        и несанкционированного доступа. Обеспечиваем безопасность данных ваших клиентов.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <a href="#demo" class="px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold rounded-lg hover:from-blue-400 hover:to-blue-500 transition-all duration-300 shadow-lg hover:shadow-blue-500/30 flex items-center justify-center transform hover:scale-105">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            Демонстрация защиты
                        </a>
                        <a href="#features" class="px-8 py-4 border-2 border-blue-400 text-blue-400 font-bold rounded-lg hover:bg-blue-400 hover:bg-opacity-10 transition-all duration-300 shadow-lg hover:shadow-blue-500/20 flex items-center justify-center transform hover:scale-105">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Возможности системы
                        </a>
                    </div>
                </div>

                <!-- Encryption Animation -->
                <div class="relative w-full lg:w-1/2 max-w-lg mt-10 lg:mt-0">
                    <div class="encryption-animation bg-gray-800/50 border-2 border-blue-400/20 rounded-xl p-6">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-32 h-32 text-blue-400 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        
                        <!-- Data particles -->
                        <div id="particles"></div>
                        
                        <!-- Encrypted data -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center p-6">
                                <div class="text-xs font-mono text-blue-300 mb-2">Исходные данные:</div>
                                <div class="text-sm font-mono text-white mb-4">Логин: user123 | Пароль: ********</div>
                                
                                <svg class="w-8 h-8 mx-auto text-blue-400 my-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                
                                <div class="text-xs font-mono text-blue-300 mb-2">Зашифрованные данные:</div>
                                <div class="text-sm font-mono text-gray-400">a5f8d3e0c1b7...9f2e4d6c8a0b</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Security Features -->
<section id="features" class="py-20 bg-gray-900 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full bg-repeat opacity-20" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNNTAgMEwxMDAgMjVMOTAgNzVMNTAgMTAwTDEwIDc1TDAgMjVMNTAgMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDA5NWZmIiBzdHJva2Utd2lkdGg9IjAuNSIvPjwvc3ZnPg==');"></div>
    </div>
    <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-blue-600/10 blur-3xl"></div>
    <div class="absolute -left-32 -bottom-32 w-96 h-96 rounded-full bg-indigo-600/10 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <h2 class="text-4xl text-center font-bold mb-4">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">Мощные технологии защиты</span>
        </h2>
        <p class="text-xl text-center text-gray-400 mb-16 max-w-3xl mx-auto">Инновационные решения для комплексной безопасности ваших данных</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Шифрование данных</h3>
                    <p class="text-gray-400 mb-6">AES-256 для данных и RSA-2048 для ключей обеспечивают максимальную защиту информации.</p>
                    
                    <!-- Interactive Code Example -->
                    <div class="bg-gray-800 rounded-lg overflow-hidden mb-4">
                        <div class="bg-gray-900 px-4 py-2 text-xs text-gray-400 flex items-center">
                            <span class="w-3 h-3 rounded-full bg-red-500 mr-2"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span>
                            <span class="ml-auto">encryption.js</span>
                        </div>
                        <pre class="text-xs font-mono text-gray-300 p-4 overflow-x-auto"><code>// Пример шифрования данных
const encryptedData = crypto.AES.encrypt(
  JSON.stringify(data), 
  secretKey, 
  { 
    keySize: 256,
    mode: crypto.mode.CBC,
    padding: crypto.pad.Pkcs7
  }
).toString();</code></pre>
                    </div>
                    <div class="text-sm text-blue-400 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Ключи хранятся в аппаратных модулях безопасности (HSM)
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Защита от атак</h3>
                    <p class="text-gray-400 mb-6">Интеллектуальная система предотвращает 99.9% известных угроз в реальном времени.</p>
                    
                    <!-- Attack Visualization -->
                    <div class="mb-4">
                        <div class="flex justify-between text-xs text-gray-500 mb-2">
                            <span>Обнаруженные атаки</span>
                            <span>12,843 за месяц</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-red-500 to-yellow-500 rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="mt-2 flex justify-between text-xs text-gray-400">
                            <span class="text-green-400 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                100% заблокировано
                            </span>
                            <span>0 проникновений</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-red-900/50 text-red-400 rounded-full text-xs">SQLi</span>
                            <span class="px-3 py-1 bg-yellow-900/50 text-yellow-400 rounded-full text-xs">XSS</span>
                            <span class="px-3 py-1 bg-purple-900/50 text-purple-400 rounded-full text-xs">CSRF</span>
                            <span class="px-3 py-1 bg-blue-900/50 text-blue-400 rounded-full text-xs">DDoS</span>
                            <span class="px-3 py-1 bg-green-900/50 text-green-400 rounded-full text-xs">Brute Force</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">2FA Аутентификация</h3>
                    <p class="text-gray-400 mb-6">Многофакторная защита доступа с поддержкой различных методов подтверждения.</p>
                    
                    <!-- 2FA Methods -->
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="bg-gray-800 rounded-lg p-3 text-center group-hover:bg-gray-700 transition-all">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="text-xs text-gray-300">Email/SMS</div>
                        </div>
                        <div class="bg-gray-800 rounded-lg p-3 text-center group-hover:bg-gray-700 transition-all">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="text-xs text-gray-300">TOTP Apps</div>
                        </div>
                        <div class="bg-gray-800 rounded-lg p-3 text-center group-hover:bg-gray-700 transition-all">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <div class="text-xs text-gray-300">Security Keys</div>
                        </div>
                        <div class="bg-gray-800 rounded-lg p-3 text-center group-hover:bg-gray-700 transition-all">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="text-xs text-gray-300">Biometrics</div>
                        </div>
                    </div>
                    
                    <div class="text-sm text-blue-400 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Адаптивная аутентификация по уровню риска
                    </div>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Мониторинг активности</h3>
                    <p class="text-gray-400 mb-6">Полная аудитория всех действий пользователей с возможностью алертов.</p>
                    
                    <!-- Activity Log Example -->
                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <div class="bg-gray-900 px-4 py-2 text-xs text-gray-400 flex items-center">
                            <span class="w-3 h-3 rounded-full bg-red-500 mr-2"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span>
                            <span class="ml-auto">activity.log</span>
                        </div>
                        <div class="p-3 text-xs font-mono text-gray-300 space-y-2 max-h-40 overflow-y-auto">
                            <div class="flex">
                                <span class="text-green-400 w-24 shrink-0">[14:32:05]</span>
                                <span>User admin logged in from 192.168.1.15</span>
                            </div>
                            <div class="flex">
                                <span class="text-green-400 w-24 shrink-0">[14:33:22]</span>
                                <span>User admin accessed /admin/dashboard</span>
                            </div>
                            <div class="flex">
                                <span class="text-yellow-400 w-24 shrink-0">[14:35:41]</span>
                                <span>Warning: Multiple failed login attempts for user test</span>
                            </div>
                            <div class="flex">
                                <span class="text-red-400 w-24 shrink-0">[14:36:05]</span>
                                <span>ALERT: Suspicious activity detected from IP 93.184.216.34</span>
                            </div>
                            <div class="flex">
                                <span class="text-green-400 w-24 shrink-0">[14:36:30]</span>
                                <span>Firewall blocked IP 93.184.216.34</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Ролевой доступ</h3>
                    <p class="text-gray-400 mb-6">Гибкая система прав с минимальными привилегиями для каждого сотрудника.</p>
                    
                    <!-- RBAC Visualization -->
                    <div class="flex flex-col items-center mb-4">
                        <div class="relative w-full max-w-xs">
                            <!-- Admin -->
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-red-600 to-red-800 rounded-full flex items-center justify-center text-white font-bold shadow-lg">Admin</div>
                            
                            <!-- Managers -->
                            <div class="absolute top-20 left-1/4 w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">Manager</div>
                            <div class="absolute top-20 right-1/4 w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">Auditor</div>
                            
                            <!-- Users -->
                            <div class="absolute top-40 left-1/6 w-12 h-12 bg-gradient-to-br from-green-600 to-green-800 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-lg">Editor</div>
                            <div class="absolute top-40 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-br from-green-600 to-green-800 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-lg">Viewer</div>
                            <div class="absolute top-40 right-1/6 w-12 h-12 bg-gradient-to-br from-green-600 to-green-800 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-lg">Guest</div>
                            
                            <!-- Lines -->
                            <svg class="w-full h-48" xmlns="http://www.w3.org/2000/svg">
                                <line x1="50%" y1="16" x2="25%" y2="60" stroke="#3B82F6" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="50%" y1="16" x2="75%" y2="60" stroke="#3B82F6" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="25%" y1="76" x2="16.66%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="25%" y1="76" x2="50%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="25%" y1="76" x2="83.33%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="75%" y1="76" x2="16.66%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="75%" y1="76" x2="50%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                                <line x1="75%" y1="76" x2="83.33%" y2="120" stroke="#10B981" stroke-width="2" stroke-dasharray="5,3" />
                            </svg>
                        </div>
                    </div>
                    
                    <div class="text-sm text-blue-400 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Поддержка кастомных ролей и политик доступа
                    </div>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="group relative bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')] bg-cover bg-center opacity-10 group-hover:opacity-20 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-all">
                        <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Аудит безопасности</h3>
                    <p class="text-gray-400 mb-6">Автоматическое сканирование уязвимостей и генерация отчетов.</p>
                    
                    <!-- Vulnerability Chart -->
                    <div class="bg-gray-800 rounded-lg p-4 mb-4">
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Уровень безопасности</span>
                            <span>92/100</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-400 to-blue-500 rounded-full" style="width: 92%"></div>
                        </div>
                        <div class="mt-3 grid grid-cols-3 gap-2 text-xs">
                            <div class="text-center">
                                <div class="text-green-400 font-bold">0</div>
                                <div class="text-gray-400">Критические</div>
                            </div>
                            <div class="text-center">
                                <div class="text-yellow-400 font-bold">3</div>
                                <div class="text-gray-400">Высокие</div>
                            </div>
                            <div class="text-center">
                                <div class="text-blue-400 font-bold">7</div>
                                <div class="text-gray-400">Средние</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-3">
                        <div class="text-xs font-mono text-gray-300 flex items-center mb-1">
                            <span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>
                            <span>Обновить OpenSSL до версии 3.0.7</span>
                        </div>
                        <div class="text-xs font-mono text-gray-300 flex items-center mb-1">
                            <span class="w-2 h-2 rounded-full bg-blue-400 mr-2"></span>
                            <span>Добавить CSP заголовки</span>
                        </div>
                        <div class="text-xs font-mono text-gray-300 flex items-center">
                            <span class="w-2 h-2 rounded-full bg-blue-400 mr-2"></span>
                            <span>Включить HSTS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Protection Demo -->
<section id="demo" class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl text-center font-bold mb-16">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">Интерактивная демонстрация</span>
            <br>работы системы защиты
        </h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-white mb-6">Как мы защищаем ваш сайт от атак</h3>
                <p class="text-gray-400 mb-8">Наша система в реальном времени анализирует входящий трафик и блокирует потенциально опасные запросы. Попробуйте сами:</p>
                
                <!-- Attack Visualization Container -->
                <div class="hacker-attack mb-8 relative" id="attack-container">
                    <!-- Server Visualization -->
                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-gray-800 border-2 border-blue-400 rounded-full flex items-center justify-center z-10">
                        <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                        </svg>
                    </div>
                    
                    <!-- Step Indicators -->
                    <div class="absolute top-4 left-4 text-xs text-gray-400 hidden" id="step-indicator">Шаг <span id="current-step">1</span> из 5</div>
                    
                    <!-- Connection Lines -->
                    <div class="connection-line" id="normal-traffic"></div>
                    <div class="connection-line attack" id="attack-traffic"></div>
                    <div class="connection-line protected" id="protection-line"></div>
                    
                    <!-- User Controls -->
                    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-4 hidden" id="controls">
                        <button class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 text-sm" id="prev-step">Назад</button>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 text-sm" id="next-step">Далее</button>
                    </div>
                </div>
                
                <!-- Start Button -->
                <button id="start-demo" class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Начать демонстрацию
                </button>
                
                <!-- Manual Attack Button (hidden initially) -->
                <button id="simulate-attack" class="w-full px-6 py-3 bg-red-500/10 border border-red-500 text-red-400 rounded-lg hover:bg-red-500/20 transition flex items-center justify-center hidden mt-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    Симулировать атаку вручную
                </button>
            </div>
            
            <!-- Security Log -->
            <div>
                <div class="bg-gray-800/50 border-2 border-blue-400/20 rounded-xl p-8 h-full">
                    <h4 class="text-xl font-bold text-white mb-4">Журнал событий безопасности</h4>
                    
                    <div class="space-y-4" id="security-log">
                        <!-- Initial log message -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-white">Система защиты активна</p>
                                <p class="text-xs text-gray-400">Готов к демонстрации | Время: <span id="current-time">14:00:00</span></p>
                                <p class="text-xs text-blue-400 mt-1">Ожидание начала тестирования</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hacker-attack {
        height: 400px;
        background: radial-gradient(ellipse at center, rgba(15,23,42,0.8) 0%, rgba(15,23,42,1) 70%);
    }
    
    .connection-line {
        position: absolute;
        height: 2px;
        background: rgba(0, 150, 255, 0.3);
        transform-origin: left;
        left: 10%;
        top: 50%;
        width: 0;
        transition: all 0.5s ease;
    }
    
    .connection-line.attack {
        background: rgba(255, 50, 50, 0.5);
        height: 3px;
    }
    
    .connection-line.protected {
        background: rgba(0, 200, 255, 0.7);
        height: 4px;
        box-shadow: 0 0 10px rgba(0, 200, 255, 0.5);
    }
    
    .connection-line::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        right: -4px;
        top: -3px;
    }
    
    .connection-line.attack::after {
        background: rgba(255, 50, 50, 0.8);
        box-shadow: 0 0 10px rgba(255, 50, 50, 0.5);
    }
    
    .connection-line.protected::after {
        background: rgba(0, 200, 255, 0.9);
        box-shadow: 0 0 15px rgba(0, 200, 255, 0.7);
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 1; }
    }
    
    .pulse-animation {
        animation: pulse 1.5s infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startBtn = document.getElementById('start-demo');
        const attackBtn = document.getElementById('simulate-attack');
        const prevBtn = document.getElementById('prev-step');
        const nextBtn = document.getElementById('next-step');
        const stepIndicator = document.getElementById('step-indicator');
        const currentStep = document.getElementById('current-step');
        const securityLog = document.getElementById('security-log');
        const currentTime = document.getElementById('current-time');
        
        const normalTraffic = document.getElementById('normal-traffic');
        const attackTraffic = document.getElementById('attack-traffic');
        const protectionLine = document.getElementById('protection-line');
        const controls = document.getElementById('controls');
        
        let step = 0;
        const totalSteps = 5;
        
        // Update time every second
        function updateTime() {
            const now = new Date();
            currentTime.textContent = now.toLocaleTimeString('ru-RU', {hour12: false});
        }
        setInterval(updateTime, 1000);
        updateTime();
        
        // Start demo
        startBtn.addEventListener('click', function() {
            startBtn.classList.add('hidden');
            stepIndicator.classList.remove('hidden');
            controls.classList.remove('hidden');
            attackBtn.classList.remove('hidden');
            nextStep();
        });
        
        // Navigation
        nextBtn.addEventListener('click', nextStep);
        prevBtn.addEventListener('click', prevStep);
        
        function nextStep() {
            if (step >= totalSteps) return;
            step++;
            currentStep.textContent = step;
            updateDemo();
        }
        
        function prevStep() {
            if (step <= 1) return;
            step--;
            currentStep.textContent = step;
            updateDemo();
        }
        
        // Update demo based on current step
        function updateDemo() {
            // Reset all lines
            normalTraffic.style.width = '0';
            attackTraffic.style.width = '0';
            protectionLine.style.width = '0';
            
            // Clear any existing classes
            normalTraffic.classList.remove('pulse-animation');
            attackTraffic.classList.remove('pulse-animation');
            protectionLine.classList.remove('pulse-animation');
            
            // Update based on step
            switch(step) {
                case 1:
                    // Step 1: Normal traffic
                    normalTraffic.style.width = '80%';
                    addLogEntry('Нормальный трафик', 'IP: 192.168.1.1', 'Запрос обработан');
                    break;
                    
                case 2:
                    // Step 2: Attack detected
                    normalTraffic.style.width = '80%';
                    attackTraffic.style.width = '80%';
                    attackTraffic.classList.add('pulse-animation');
                    addLogEntry('Обнаружена SQL-инъекция', 'IP: 185.143.223.67', 'Анализ запроса...');
                    break;
                    
                case 3:
                    // Step 3: Protection activated
                    normalTraffic.style.width = '80%';
                    attackTraffic.style.width = '40%';
                    protectionLine.style.width = '80%';
                    protectionLine.classList.add('pulse-animation');
                    addLogEntry('SQL-инъекция заблокирована', 'IP: 185.143.223.67', 'Запрос отклонен, IP добавлен в черный список');
                    break;
                    
                case 4:
                    // Step 4: XSS attack
                    normalTraffic.style.width = '80%';
                    attackTraffic.style.width = '80%';
                    attackTraffic.style.top = '60%';
                    addLogEntry('Попытка XSS-атаки', 'IP: 91.234.190.12', 'Обнаружен вредоносный скрипт');
                    break;
                    
                case 5:
                    // Step 5: XSS blocked
                    normalTraffic.style.width = '80%';
                    attackTraffic.style.width = '30%';
                    attackTraffic.style.top = '60%';
                    protectionLine.style.width = '80%';
                    protectionLine.style.top = '60%';
                    addLogEntry('XSS-атака нейтрализована', 'IP: 91.234.190.12', 'Скрипт удален, пользователь перенаправлен');
                    break;
            }
            
            // Update button states
            prevBtn.disabled = step <= 1;
            nextBtn.disabled = step >= totalSteps;
            nextBtn.textContent = step >= totalSteps ? 'Завершено' : 'Далее';
        }
        
        // Add log entry
        function addLogEntry(title, subtitle, message) {
            const now = new Date();
            const time = now.toLocaleTimeString('ru-RU', {hour12: false});
            
            const entry = document.createElement('div');
            entry.className = 'flex items-start animate-fadeIn';
            entry.innerHTML = `
                <div class="flex-shrink-0 mt-1">
                    <div class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">${title}</p>
                    <p class="text-xs text-gray-400">${subtitle} | Время: ${time}</p>
                    <p class="text-xs text-blue-400 mt-1">${message}</p>
                </div>
            `;
            
            securityLog.insertBefore(entry, securityLog.firstChild);
            
            // Limit log entries
            if (securityLog.children.length > 6) {
                securityLog.removeChild(securityLog.lastChild);
            }
        }
        
        // Manual attack simulation
        attackBtn.addEventListener('click', function() {
            if (step >= totalSteps) {
                step = 1;
                currentStep.textContent = step;
            }
            nextStep();
            
            // Auto-advance through all steps
            if (step < totalSteps) {
                setTimeout(() => {
                    step++;
                    currentStep.textContent = step;
                    updateDemo();
                    
                    if (step < totalSteps) {
                        setTimeout(() => {
                            step++;
                            currentStep.textContent = step;
                            updateDemo();
                            
                            if (step < totalSteps) {
                                setTimeout(() => {
                                    step++;
                                    currentStep.textContent = step;
                                    updateDemo();
                                }, 1500);
                            }
                        }, 1500);
                    }
                }, 1500);
            }
        });
    });
</script>

    <!-- Encryption Process -->
<section id="protection" class="py-20 bg-gray-800/50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl text-center font-bold mb-16">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">Интерактивная демонстрация</span>
            <br>процесса шифрования данных
        </h2>
        
        <div class="bg-gray-900 rounded-xl p-8 md:p-12 border border-gray-800">
            <!-- Progress Steps -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Step 1 -->
                <div class="text-center" id="step1">
                    <div class="w-20 h-20 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300">
                        <span class="text-2xl font-bold text-blue-400">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Идентификация данных</h3>
                    <p class="text-gray-400">Система автоматически обнаруживает конфиденциальные данные в вашем вводе</p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center" id="step2">
                    <div class="w-20 h-20 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300">
                        <span class="text-2xl font-bold text-gray-400">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-500 mb-3">Шифрование</h3>
                    <p class="text-gray-600">Гибридное шифрование (AES-256 + RSA-2048)</p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center" id="step3">
                    <div class="w-20 h-20 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300">
                        <span class="text-2xl font-bold text-gray-400">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-500 mb-3">Хранение</h3>
                    <p class="text-gray-600">Безопасное распределенное хранение</p>
                </div>
            </div>

            <!-- Interactive Demo -->
            <div class="mt-8">
                <div class="bg-gray-800/50 rounded-lg p-6 border border-gray-700">
                    <!-- Input Section -->
                    <div class="mb-8">
                        <label for="userData" class="block text-sm font-medium text-gray-300 mb-2">Введите тестовые данные для шифрования:</label>
                        <div class="flex flex-col md:flex-row gap-4">
                            <input type="text" id="userData" class="flex-1 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Например: login=user123&password=Secret!2023">
                            <button id="encryptBtn" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition flex items-center justify-center whitespace-nowrap">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Зашифровать
                            </button>
                        </div>
                    </div>

                    <!-- Process Visualization -->
                    <div id="processVisualization" class="hidden">
                        <!-- Step 1: Data Identification -->
                        <div class="mb-8" id="visualStep1">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <h4 class="text-lg font-semibold text-white">Идентификация конфиденциальных данных</h4>
                            </div>
                            <div class="bg-gray-900 p-4 rounded-lg border border-gray-700">
                                <div class="text-xs font-mono text-blue-300 mb-2">Обнаружены конфиденциальные данные:</div>
                                <div class="text-sm font-mono text-white p-3 bg-gray-800 rounded" id="identifiedData"></div>
                                <div class="mt-2 text-xs text-green-400 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Система успешно идентифицировала <span id="sensitiveCount">0</span> конфиденциальных элементов</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Encryption Process -->
                        <div class="mb-8" id="visualStep2">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <h4 class="text-lg font-semibold text-white">Процесс шифрования</h4>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-gray-900 p-4 rounded-lg border border-gray-700">
                                    <div class="text-xs font-mono text-blue-300 mb-2">Генерация ключей:</div>
                                    <div class="text-xs font-mono text-gray-400 space-y-2">
                                        <div class="flex items-center">
                                            <span class="text-green-400 mr-2">✓</span>
                                            <span>Сгенерирован симметричный ключ AES-256</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="text-green-400 mr-2">✓</span>
                                            <span>Получен публичный ключ RSA-2048</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-900 p-4 rounded-lg border border-gray-700">
                                    <div class="text-xs font-mono text-blue-300 mb-2">Процесс шифрования:</div>
                                    <div class="text-xs font-mono text-gray-400 space-y-2">
                                        <div class="flex items-center">
                                            <span class="text-yellow-400 mr-2">↻</span>
                                            <span>Шифрование данных с помощью AES-256</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="text-yellow-400 mr-2">↻</span>
                                            <span>Шифрование ключа AES с помощью RSA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 bg-gray-900 p-4 rounded-lg border border-gray-700">
                                <div class="text-xs font-mono text-blue-300 mb-2">Результат шифрования:</div>
                                <div class="text-sm font-mono text-gray-400 p-3 bg-gray-800 rounded" id="encryptedResult"></div>
                                <div class="mt-2 text-xs text-green-400">Данные успешно зашифрованы с использованием гибридной системы</div>
                            </div>
                        </div>

                        <!-- Step 3: Secure Storage -->
                        <div id="visualStep3">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <h4 class="text-lg font-semibold text-white">Безопасное хранение</h4>
                            </div>
                            <div class="bg-gray-900 p-4 rounded-lg border border-gray-700">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                                    <div class="p-3">
                                        <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                            </svg>
                                        </div>
                                        <div class="text-sm text-gray-300">Ключи хранятся отдельно от данных</div>
                                    </div>
                                    <div class="p-3">
                                        <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                            </svg>
                                        </div>
                                        <div class="text-sm text-gray-300">Регулярная ротация ключей</div>
                                    </div>
                                    <div class="p-3">
                                        <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                        <div class="text-sm text-gray-300">Распределенное хранилище</div>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="inline-flex items-center px-4 py-2 bg-green-900/30 border border-green-500 text-green-400 rounded-lg">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                        Ваши данные теперь полностью защищены
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const encryptBtn = document.getElementById('encryptBtn');
    const userDataInput = document.getElementById('userData');
    const processVisualization = document.getElementById('processVisualization');
    const identifiedData = document.getElementById('identifiedData');
    const encryptedResult = document.getElementById('encryptedResult');
    const sensitiveCount = document.getElementById('sensitiveCount');
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const step3 = document.getElementById('step3');
    const visualStep1 = document.getElementById('visualStep1');
    const visualStep2 = document.getElementById('visualStep2');
    const visualStep3 = document.getElementById('visualStep3');

    // Reset all steps
    function resetSteps() {
        // Reset step indicators
        step1.querySelector('div').classList.remove('bg-blue-500/20');
        step1.querySelector('span').classList.remove('text-blue-400');
        step1.querySelector('span').classList.add('text-gray-400');
        step1.querySelector('h3').classList.remove('text-white');
        step1.querySelector('h3').classList.add('text-gray-500');
        step1.querySelector('p').classList.remove('text-gray-400');
        step1.querySelector('p').classList.add('text-gray-600');
        
        step2.querySelector('div').classList.remove('bg-blue-500/20');
        step2.querySelector('span').classList.remove('text-blue-400');
        step2.querySelector('span').classList.add('text-gray-400');
        step2.querySelector('h3').classList.remove('text-white');
        step2.querySelector('h3').classList.add('text-gray-500');
        step2.querySelector('p').classList.remove('text-gray-400');
        step2.querySelector('p').classList.add('text-gray-600');
        
        step3.querySelector('div').classList.remove('bg-blue-500/20');
        step3.querySelector('span').classList.remove('text-blue-400');
        step3.querySelector('span').classList.add('text-gray-400');
        step3.querySelector('h3').classList.remove('text-white');
        step3.querySelector('h3').classList.add('text-gray-500');
        step3.querySelector('p').classList.remove('text-gray-400');
        step3.querySelector('p').classList.add('text-gray-600');
        
        // Hide all visual steps
        visualStep1.classList.add('hidden');
        visualStep2.classList.add('hidden');
        visualStep3.classList.add('hidden');
    }

    encryptBtn.addEventListener('click', function() {
        const userData = userDataInput.value.trim();
        
        if (!userData) {
            alert('Пожалуйста, введите данные для шифрования');
            return;
        }

        // Reset everything
        resetSteps();
        processVisualization.classList.remove('hidden');
        
        // Step 1: Data Identification
        setTimeout(() => {
            // Highlight step 1
            step1.querySelector('div').classList.add('bg-blue-500/20');
            step1.querySelector('span').classList.remove('text-gray-400');
            step1.querySelector('span').classList.add('text-blue-400');
            step1.querySelector('h3').classList.remove('text-gray-500');
            step1.querySelector('h3').classList.add('text-white');
            step1.querySelector('p').classList.remove('text-gray-600');
            step1.querySelector('p').classList.add('text-gray-400');
            
            // Show visual step 1
            visualStep1.classList.remove('hidden');
            
            // Identify sensitive data (simplified for demo)
            const sensitiveFields = [];
            if (userData.toLowerCase().includes('login=') || userData.toLowerCase().includes('user=')) {
                sensitiveFields.push('Логин');
            }
            if (userData.toLowerCase().includes('pass=') || userData.toLowerCase().includes('password=')) {
                sensitiveFields.push('Пароль');
            }
            if (userData.toLowerCase().includes('card=') || userData.toLowerCase().includes('credit=')) {
                sensitiveFields.push('Платежные данные');
            }
            
            identifiedData.textContent = userData;
            sensitiveCount.textContent = sensitiveFields.length;
            
            // Highlight sensitive parts (simplified)
            if (sensitiveFields.length > 0) {
                let highlighted = userData;
                highlighted = highlighted.replace(/(login=|user=|pass=|password=|card=|credit=)([^&]*)/gi, 
                    '<span class="text-red-400">$1$2</span>');
                identifiedData.innerHTML = highlighted;
            }
            
            // Proceed to step 2 after delay
            setTimeout(showStep2, 2000);
        }, 500);
    });

    function showStep2() {
        // Highlight step 2
        step2.querySelector('div').classList.add('bg-blue-500/20');
        step2.querySelector('span').classList.remove('text-gray-400');
        step2.querySelector('span').classList.add('text-blue-400');
        step2.querySelector('h3').classList.remove('text-gray-500');
        step2.querySelector('h3').classList.add('text-white');
        step2.querySelector('p').classList.remove('text-gray-600');
        step2.querySelector('p').classList.add('text-gray-400');
        
        // Show visual step 2
        visualStep2.classList.remove('hidden');
        
        // Simulate encryption process
        setTimeout(() => {
            // Generate "encrypted" data (in real app this would be actual encryption)
            const encrypted = btoa(encodeURIComponent(userDataInput.value)).match(/.{1,24}/g).join('...');
            encryptedResult.textContent = encrypted;
            
            // Proceed to step 3 after delay
            setTimeout(showStep3, 2500);
        }, 1000);
    }

    function showStep3() {
        // Highlight step 3
        step3.querySelector('div').classList.add('bg-blue-500/20');
        step3.querySelector('span').classList.remove('text-gray-400');
        step3.querySelector('span').classList.add('text-blue-400');
        step3.querySelector('h3').classList.remove('text-gray-500');
        step3.querySelector('h3').classList.add('text-white');
        step3.querySelector('p').classList.remove('text-gray-600');
        step3.querySelector('p').classList.add('text-gray-400');
        
        // Show visual step 3
        visualStep3.classList.remove('hidden');
    }
});
</script>
<!-- Interactive Attack Visualization -->
<section class="py-20 bg-gray-900 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-repeat" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNNTAgMEwxMDAgMjVMOTAgNzVMNTAgMTAwTDEwIDc1TDAgMjVMNTAgMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmY5ZTAwIiBzdHJva2Utd2lkdGg9IjAuNSIvPjwvc3ZnPg==');"></div>
    </div>
    <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-red-600/10 blur-3xl"></div>
    <div class="absolute -left-32 -bottom-32 w-96 h-96 rounded-full bg-yellow-600/10 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <h2 class="text-3xl text-center font-bold mb-4">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-yellow-400">Как хакеры атакуют сайты</span>
        </h2>
        <p class="text-xl text-center text-gray-400 mb-16 max-w-3xl mx-auto">Интерактивная демонстрация уязвимостей без защиты</p>

        <!-- Interactive Worm Visualization -->
        <div class="relative h-96 bg-gray-800/50 rounded-2xl border-2 border-dashed border-red-400/30 overflow-hidden">
            <!-- Website Visualization -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl shadow-2xl flex items-center justify-center z-10" id="website">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
            </div>

            <!-- Worm Elements -->
            <div class="absolute top-0 left-0 w-full h-full" id="worm-container">
                <!-- Worm segments will be added here by JavaScript -->
            </div>

            <!-- Attack Info Panel -->
            <div class="absolute bottom-4 left-4 right-4 bg-gray-900/90 backdrop-blur-sm p-4 rounded-lg border border-red-500/30 hidden" id="attack-info">
                <h4 class="text-lg font-bold text-white mb-2" id="attack-title">SQL-инъекция</h4>
                <p class="text-sm text-gray-300 mb-3" id="attack-description">Внедрение вредоносного кода в базы данных через формы ввода</p>
                <div class="flex items-center text-sm text-red-400">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    <span id="attack-stats">78% сайтов уязвимы к этой атаке</span>
                </div>
            </div>

            <!-- Protection Activated State -->
            <div class="absolute inset-0 bg-blue-500/10 flex items-center justify-center hidden" id="protection-activated">
                <div class="text-center p-8 bg-gray-900 rounded-xl border-2 border-blue-500 max-w-md">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Защита активирована!</h3>
                    <p class="text-gray-300 mb-4">Все атаки были успешно заблокированы системой SecureShield</p>
                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition" id="reset-demo">
                        Запустить демонстрацию снова
                    </button>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
            <button class="px-8 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg hover:from-red-400 hover:to-red-500 transition flex items-center justify-center" id="start-attack">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                </svg>
                Запустить хакерскую атаку
            </button>
            <button class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-400 hover:to-blue-500 transition flex items-center justify-center" id="activate-protection">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Активировать защиту
            </button>
        </div>

        <!-- Stats -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-red-500/30">
                <div class="text-4xl font-bold text-red-400 mb-2">76%</div>
                <div class="text-sm text-gray-400">Сайтов без защиты</div>
            </div>
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-yellow-500/30">
                <div class="text-4xl font-bold text-yellow-400 mb-2">3 сек</div>
                <div class="text-sm text-gray-400">Среднее время взлома</div>
            </div>
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-red-500/30">
                <div class="text-4xl font-bold text-red-400 mb-2">$4M</div>
                <div class="text-sm text-gray-400">Средний ущерб</div>
            </div>
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-blue-500/30">
                <div class="text-4xl font-bold text-blue-400 mb-2">100%</div>
                <div class="text-sm text-gray-400">Защита SecureShield</div>
            </div>
        </div>
    </div>
</section>

<style>
    .worm-segment {
        position: absolute;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: linear-gradient(135deg, #ef4444, #f59e0b);
        box-shadow: 0 0 10px rgba(239, 68, 68, 0.7);
        z-index: 5;
        transition: transform 0.3s ease;
    }
    
    .worm-segment:hover {
        transform: scale(1.3);
        z-index: 10;
    }
    
    @keyframes worm-crawl {
        0% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-10px) rotate(5deg); }
        50% { transform: translateY(0) rotate(0deg); }
        75% { transform: translateY(10px) rotate(-5deg); }
        100% { transform: translateY(0) rotate(0deg); }
    }
    
    .worm-animation {
        animation: worm-crawl 2s infinite ease-in-out;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startBtn = document.getElementById('start-attack');
        const protectBtn = document.getElementById('activate-protection');
        const resetBtn = document.getElementById('reset-demo');
        const wormContainer = document.getElementById('worm-container');
        const website = document.getElementById('website');
        const attackInfo = document.getElementById('attack-info');
        const protectionActivated = document.getElementById('protection-activated');
        
        const attacks = [
            {
                title: "SQL-инъекция",
                description: "Внедрение вредоносного кода в базы данных через формы ввода",
                stats: "78% сайтов уязвимы к этой атаке",
                color: "#ef4444"
            },
            {
                title: "XSS-атака",
                description: "Внедрение вредоносных скриптов через пользовательский ввод",
                stats: "63% сайтов подвержены XSS",
                color: "#f59e0b"
            },
            {
                title: "DDoS",
                description: "Перегрузка сервера массовыми запросами",
                stats: "Средняя стоимость атаки $40/час",
                color: "#ec4899"
            },
            {
                title: "Фишинг",
                description: "Кража учетных данных через поддельные страницы",
                stats: "91% кибератак начинаются с фишинга",
                color: "#8b5cf6"
            }
        ];
        
        let currentAttack = 0;
        let wormSegments = [];
        
        // Create worm segments
        function createWorm() {
            wormContainer.innerHTML = '';
            wormSegments = [];
            
            const segmentCount = 12;
            for (let i = 0; i < segmentCount; i++) {
                const segment = document.createElement('div');
                segment.className = 'worm-segment';
                segment.style.left = `${-50 + i * 5}px`;
                segment.style.top = `${Math.random() * 100}%`;
                segment.style.opacity = '0';
                segment.style.transform = `scale(0.5)`;
                
                if (i === segmentCount - 1) {
                    segment.innerHTML = `
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    `;
                }
                
                wormContainer.appendChild(segment);
                wormSegments.push(segment);
            }
        }
        
        // Animate worm attack
        function animateWormAttack() {
            createWorm();
            
            // Animate worm entering
            wormSegments.forEach((segment, index) => {
                setTimeout(() => {
                    segment.style.opacity = '1';
                    segment.style.transform = 'scale(1)';
                    segment.classList.add('worm-animation');
                    
                    // Position worm heading to website
                    setTimeout(() => {
                        const websiteRect = website.getBoundingClientRect();
                        const containerRect = wormContainer.getBoundingClientRect();
                        
                        const targetX = websiteRect.left - containerRect.left + websiteRect.width/2 - 12;
                        const targetY = websiteRect.top - containerRect.top + websiteRect.height/2 - 12;
                        
                        segment.style.transition = `left 2s ease-in-out ${index*0.1}s, top 2s ease-in-out ${index*0.1}s`;
                        segment.style.left = `${targetX}px`;
                        segment.style.top = `${targetY}px`;
                        
                        // On last segment
                        if (index === wormSegments.length - 1) {
                            setTimeout(() => {
                                // Show attack info
                                document.getElementById('attack-title').textContent = attacks[currentAttack].title;
                                document.getElementById('attack-description').textContent = attacks[currentAttack].description;
                                document.getElementById('attack-stats').textContent = attacks[currentAttack].stats;
                                attackInfo.classList.remove('hidden');
                                
                                // Change website appearance
                                website.style.background = 'linear-gradient(135deg, #ef4444, #7f1d1d)';
                                website.style.border = '2px dashed #fca5a5';
                                
                                // Rotate to next attack type
                                currentAttack = (currentAttack + 1) % attacks.length;
                            }, 2000);
                        }
                    }, 500);
                }, index * 100);
            });
        }
        
        // Activate protection
        function activateProtection() {
            // Hide attack info
            attackInfo.classList.add('hidden');
            
            // Remove worm
            wormSegments.forEach(segment => {
                segment.style.transition = 'all 0.5s ease';
                segment.style.opacity = '0';
                segment.style.transform = 'translateY(20px) scale(0.5)';
            });
            
            // Restore website appearance
            website.style.background = 'linear-gradient(135deg, #3b82f6, #1d4ed8)';
            website.style.border = 'none';
            website.style.boxShadow = '0 0 30px rgba(59, 130, 246, 0.5)';
            
            // Show protection activated
            setTimeout(() => {
                protectionActivated.classList.remove('hidden');
            }, 1000);
        }
        
        // Reset demo
        function resetDemo() {
            protectionActivated.classList.add('hidden');
            website.style.boxShadow = 'none';
            createWorm();
        }
        
        // Event listeners
        startBtn.addEventListener('click', animateWormAttack);
        protectBtn.addEventListener('click', activateProtection);
        resetBtn.addEventListener('click', resetDemo);
        
        // Initialize
        createWorm();
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonialsTrack');
    const prevBtn = document.getElementById('prevTestimonial');
    const nextBtn = document.getElementById('nextTestimonial');
    const testimonials = document.querySelectorAll('#testimonialsTrack > div');
    let currentIndex = 0;
    const testimonialWidth = testimonials[0].offsetWidth;
    const visibleCount = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;

    function updateTrack() {
        track.style.transform = `translateX(-${currentIndex * testimonialWidth}px)`;
    }

    nextBtn.addEventListener('click', function() {
        if (currentIndex < testimonials.length - visibleCount) {
            currentIndex++;
            updateTrack();
        }
    });

    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateTrack();
        }
    });

    // Auto-rotate testimonials
    setInterval(function() {
        if (currentIndex < testimonials.length - visibleCount) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateTrack();
    }, 5000);

    // Handle window resize
    window.addEventListener('resize', function() {
        const newVisibleCount = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        if (currentIndex > testimonials.length - newVisibleCount) {
            currentIndex = Math.max(0, testimonials.length - newVisibleCount);
            updateTrack();
        }
    });
});
</script><!-- Footer -->
@include('footer')
<!-- Scripts -->
<script>  
Create data particles document.addEventListener('DOMContentLoaded', function() { const container = document.getElementById('particles'); for (let i = 0; i < 30; i++) { const particle = document.createElement('div'); particle.className = 'data-particle'; particle.style.left = `${Math.random() * 100}%`; particle.style.top = `${Math.random() * 100}%`; particle.style.animationDelay = `${Math.random() * 5}s`; particle.style.opacity = Math.random() * 0.5 + 0.1; particle.style.width = `${Math.random() * 6 + 4}px`; particle.style.height = particle.style.width; container.appendChild(particle); } // Simulate attack button document.getElementById('simulate-attack').addEventListener('click', function() { const attackContainer = document.querySelector('.hacker-attack'); // Create new attack lines for (let i = 0; i < 3; i++) { const attackLine = document.createElement('div'); attackLine.className = 'attack-line'; attackLine.style.top = `${Math.random() * 80 + 10}%`; attackLine.style.animationDelay = '0s'; attackContainer.appendChild(attackLine); // Remove after animation setTimeout(() => { attackLine.remove(); }, 3000); } // Create protection lines for (let i = 0; i < 2; i++) { const protectLine = document.createElement('div'); protectLine.className = 'protected-line'; protectLine.style.top = `${Math.random() * 80 + 10}%`; protectLine.style.width = `${Math.random() * 30 + 70}%`; protectLine.style.left = `${Math.random() * 15}%`; protectLine.style.animationDelay = '0s'; attackContainer.appendChild(protectLine); // Remove after animation setTimeout(() => { protectLine.remove(); }, 3000); } }); // Live encryption demo document.getElementById('live-encrypt').addEventListener('click', function() { const input = prompt('Введите текст для шифрования:'); if (input) { // Simple "encryption" for demo purposes const encrypted = btoa(input).split('').reverse().join('').substring(0, 24) + '...'; alert(`Результат шифрования:\n\n${encrypted}`); } }); }); </script></body> </html>