self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('first-app')
      .then(function(cache) {
        cache.addAll([
          '../../',
          '../../index.html',
          '../../styles.css',
          '/app.js'
        ])
      })
  );
  return self.clients.claim();
});


self.addEventListener('activate', function(event) {
  console.log('[Service Worker] Activating Service Worker ....', event);
  event.waitUntil(
    caches.keys()
      .then(function(keyList) {
        return Promise.all(keyList.map(function(key) {
          if (key !== CACHE_STATIC_NAME && key !== CACHE_DYNAMIC_NAME) {
            console.log('[Service Worker] Removing old cache.', key);
            return caches.delete(key);
          }
        }));
      })
  );
  return self.clients.claim();
});

//Cache then network strategy
self.addEventListener('fetch', function(event) {
  event.respondWith(
    event.respondWith(
    caches.open(CACHE_DYNAMIC_NAME)
      .then(function(cache) {
        return fetch(event.request)
          .then(function(res) {
            cache.put(event.request, res.clone());
            return res;
          });
      })
  );
});

//network with cache fallback
//   self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     event.respondWith(
//     fetch(event.request)
//       .then(function(res) {
//         return caches.open(CACHE_DYNAMIC_NAME)
//                 .then(function(cache) {
//                   cache.put(event.request.url, res.clone());
//                   return res;
//                 })
//       })
//       .catch(function(err) {
//         return caches.match(event.request);
//       })

//   );
// });

// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     caches.match(event.request)
//       .then(function(res) {
//         return res;
//       })
//   );
// });
