self.addEventListener('install', function(event) {
  console.log('[Service Worker] Installing Service Worker ...', event);
  event.waitUntil(
    caches.open('first-app')
      .then(function(cache) {
        console.log('[Service Worker] Precaching App Shell');
        cache.addAll([
          '/~m26416041/movie/',
          '/~m26416041/movie/index.html',
          '/~m26416041/movie/details.html',
          '/~m26416041/movie/styles.css',
          '/~m26416041/movie/src/js/app.js',
          'https://code.jquery.com/jquery-3.3.1.slim.min.js',
          'https://fonts.googleapis.com/icon?family=Material+Icons',
          'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en'
        ])
      })
  );
  return self.clients.claim();
});

self.addEventListener('activate', function(event) {
  console.log('[Service Worker] Activating Service Worker ....', event);
  return self.clients.claim();
});


self.addEventListener('fetch', event => {
  // Prevent the default, and handle the request ourselves.
  event.respondWith(async function() {
    // Try to get the response from a cache.
    const cachedResponse = await caches.match(event.request);
    // Return it if we found one.
    if (cachedResponse) return cachedResponse;
    // If we didn't find a match in the cache, use the network.
    return fetch(event.request);
  }());
});


// self.addEventListener('install', function(event) {
//   console.log('[Service Worker] Installing Service Worker ...', event);
//   event.waitUntil(
//     caches.open('static')
//       .then(function(cache) {
//         console.log('[Service Worker] Precaching App Shell');
//         cache.add('/~m26416041/movie/src/js/app.js')
//       })
//   )
// });

// self.addEventListener('activate', function(event) {
//   console.log('[Service Worker] Activating Service Worker ....', event);
//   return self.clients.claim();
// });

// self.addEventListener('fetch', function(event) {
//   event.respondWith(fetch(event.request));
// });
