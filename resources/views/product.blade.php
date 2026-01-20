<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details - {{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Tailwind CSS styles would go here */
            .bg-green-50 { background-color: #f0fdf4; }
            .text-green-600 { color: #16a34a; }
            .text-gray-900 { color: #111827; }
            .text-gray-600 { color: #4b5563; }
            .font-bold { font-weight: 700; }
            .font-semibold { font-weight: 600; }
            .text-center { text-align: center; }
            .mx-auto { margin-left: auto; margin-right: auto; }
            .px-4 { padding-left: 1rem; padding-right: 1rem; }
            .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
            .mb-4 { margin-bottom: 1rem; }
            .mb-6 { margin-bottom: 1.5rem; }
            .max-w-4xl { max-width: 56rem; }
            .rounded-lg { border-radius: 0.5rem; }
            .shadow-lg { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
            .p-6 { padding: 1.5rem; }
            .bg-white { background-color: white; }
            .flex { display: flex; }
            .flex-col { flex-direction: column; }
            .items-center { align-items: center; }
            .justify-center { justify-content: center; }
            .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .text-2xl { font-size: 1.5rem; line-height: 2rem; }
            .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
            .min-h-screen { min-height: 100vh; }
            .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
            .from-green-50 { --tw-gradient-from: #f0fdf4; --tw-gradient-to: rgb(240 253 244 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
            .via-emerald-50 { --tw-gradient-to: rgb(236 253 245 / 0); --tw-gradient-stops: var(--tw-gradient-from), #ecfdf5, var(--tw-gradient-to); }
            .to-teal-50 { --tw-gradient-to: #f0fdfa; --tw-gradient-stops: var(--tw-gradient-from), #ecfdf5, var(--tw-gradient-to); }
        </style>
    @endif
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                            🌱 ProjectAgri
                        </h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Home</a>
                        <a href="/catalog" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Catalog</a>
                        <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">About</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Product Detail Section -->
    <section class="py-12">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div id="product-content">
                    <!-- Product content will be loaded here -->
                    <div class="text-center py-12">
                        <div class="text-4xl mb-4">🌱</div>
                        <h1 class="text-2xl font-bold text-gray-900 mb-4">Loading Product Details...</h1>
                        <p class="text-gray-600">Please wait while we fetch the product information.</p>
                    </div>
                </div>

                <!-- Availability & Harvest History -->
                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Product Availability & Harvest History</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-300 px-4 py-2 text-left">Date</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Harvest Count</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Quality</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody id="harvest-table">
                                <!-- Table rows will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Historical Availability Visualization -->
                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Historical Availability Visualization</h2>
                    <div class="bg-gray-50 p-4 rounded">
                        <canvas id="availability-chart" width="400" height="200"></canvas>
                        <p class="text-sm text-gray-600 mt-2">Estimated next availability: <span id="next-availability" class="font-semibold text-green-600">In 2 weeks</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Get product ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const productId = {{ $id }};

        // Fetch product data
        async function loadProduct() {
            try {
                const response = await fetch('/api/plants');
                const plants = await response.json();
                const product = plants.find(p => p.id === productId);

                if (product) {
                    displayProduct(product);
                } else {
                    document.getElementById('product-content').innerHTML = `
                        <div class="text-center py-12">
                            <div class="text-4xl mb-4">❌</div>
                            <h1 class="text-2xl font-bold text-gray-900 mb-4">Product Not Found</h1>
                            <p class="text-gray-600">The requested product could not be found.</p>
                            <a href="/catalog" class="inline-block mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Back to Catalog</a>
                        </div>
                    `;
                }
            } catch (error) {
                console.error('Error loading product:', error);
                document.getElementById('product-content').innerHTML = `
                    <div class="text-center py-12">
                        <div class="text-4xl mb-4">⚠️</div>
                        <h1 class="text-2xl font-bold text-gray-900 mb-4">Error Loading Product</h1>
                        <p class="text-gray-600">There was an error loading the product details.</p>
                        <button onclick="loadProduct()" class="inline-block mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Try Again</button>
                    </div>
                `;
            }
        }

        function displayProduct(product) {
            document.getElementById('product-content').innerHTML = `
                <div class="text-center mb-8">
                    <div class="text-6xl mb-4">${product.emoji}</div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">${product.name}</h1>
                    <div class="text-lg text-green-600 font-semibold mb-4">$${product.price.toFixed(2)}</div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-green-50 p-4 rounded">
                            <h3 class="font-semibold text-gray-900">Plant Type</h3>
                            <p class="text-gray-600 capitalize">${product.category}</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded">
                            <h3 class="font-semibold text-gray-900">Planting Method</h3>
                            <p class="text-gray-600">Hydroponic</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded">
                            <h3 class="font-semibold text-gray-900">Harvest Quality</h3>
                            <p class="text-gray-600">${product.availability === 'High' ? 'Premium' : product.availability === 'Medium' ? 'Standard' : 'Basic'}</p>
                        </div>
                    </div>
                    <div class="bg-blue-50 p-4 rounded mb-6">
                        <h3 class="font-semibold text-gray-900">Production Location</h3>
                        <p class="text-gray-600">${product.location}</p>
                    </div>
                    <p class="text-gray-700 mb-6">${product.description}</p>
                    <div class="flex justify-center gap-4">
                        <button class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Add to Cart</button>
                        <a href="/catalog" class="border border-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-50">Back to Catalog</a>
                    </div>
                </div>
            `;

            // Load harvest history (mock data)
            loadHarvestHistory(product);
            // Load availability chart
            loadAvailabilityChart(product);
        }

        function loadHarvestHistory(product) {
            // Mock harvest history data
            const harvestData = [
                { date: '2024-01-15', count: 45, quality: 'High', status: 'Completed' },
                { date: '2024-01-08', count: 42, quality: 'High', status: 'Completed' },
                { date: '2024-01-01', count: 38, quality: 'Medium', status: 'Completed' },
                { date: '2023-12-25', count: 41, quality: 'High', status: 'Completed' },
                { date: '2023-12-18', count: 35, quality: 'Medium', status: 'Completed' }
            ];

            const tableBody = document.getElementById('harvest-table');
            tableBody.innerHTML = harvestData.map(row => `
                <tr>
                    <td class="border border-gray-300 px-4 py-2">${row.date}</td>
                    <td class="border border-gray-300 px-4 py-2">${row.count}</td>
                    <td class="border border-gray-300 px-4 py-2">${row.quality}</td>
                    <td class="border border-gray-300 px-4 py-2">${row.status}</td>
                </tr>
            `).join('');
        }

        function loadAvailabilityChart(product) {
            // Simple bar chart using canvas
            const canvas = document.getElementById('availability-chart');
            const ctx = canvas.getContext('2d');

            // Mock availability data for the last 6 months
            const months = ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const availability = [85, 92, 78, 95, 88, 90]; // Percentage availability

            const width = canvas.width;
            const height = canvas.height;
            const barWidth = width / months.length - 10;

            ctx.clearRect(0, 0, width, height);

            // Draw bars
            availability.forEach((value, index) => {
                const barHeight = (value / 100) * (height - 40);
                const x = index * (barWidth + 10) + 5;
                const y = height - barHeight - 20;

                // Bar
                ctx.fillStyle = value > 80 ? '#16a34a' : value > 60 ? '#ca8a04' : '#dc2626';
                ctx.fillRect(x, y, barWidth, barHeight);

                // Label
                ctx.fillStyle = '#374151';
                ctx.font = '12px Arial';
                ctx.textAlign = 'center';
                ctx.fillText(months[index], x + barWidth/2, height - 5);
                ctx.fillText(value + '%', x + barWidth/2, y - 5);
            });
        }

        // Load product on page load
        document.addEventListener('DOMContentLoaded', loadProduct);
    </script>
</body>
</html>
