self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('first-app')
      .then(function(cache) {
        cache.addAll([
          '/',
          'index.php',
          'details.php',          
          'styles.css',
          'src/js/app.js',
          'https://code.jquery.com/jquery-3.3.1.slim.min.js',
          'https://fonts.googleapis.com/icon?family=Material+Icons',
          'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en',
          'https://code.getmdl.io/1.3.0/material.grey-orange.min.css',
          'https://code.getmdl.io/1.3.0/material.min.js',
          'images/192.png',
          'images/152.png'
        ])
      })
  );
  return self.clients.claim();
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(res) {
        return res;
      })
  );
});


// // Cache
// self.addEventListener('install', function(event) {
//   event.waitUntil(
//     caches.open('testtok')
//       .then(function(cache) {
//         cache.add('/app.js')
//       })
//   );
// });

// self.addEventListener('activate', function(event) {
//   return self.clients.claim();
// });

// self.addEventListener('fetch', function(event) {
//   event.respondWith(fetch(event.request));
// });

// // Install
// self.addEventListener('install', function(event) {
//   event.waitUntil(
//     caches.open('static')
//       .then(function(cache) {
//         console.log('[Service Worker] Precaching App Shell');
//         cache.addAll([
//           '/../../',
//           '/../../index.php',
//           '/../../styles.css',
//           'https://code.jquery.com/jquery-3.3.1.slim.min.js',
//           'https://fonts.googleapis.com/icon?family=Material+Icons',
//           'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en',
//           'https://code.getmdl.io/1.3.0/material.grey-orange.min.css',
//           'https://code.getmdl.io/1.3.0/material.min.js',
//           '/../../images/192.png',
//           '/../../images/152.png'
//         ]);
//       })
//   )
// });

// // Delete Old Cache
// self.addEventListener('activate', function(event) {
//   console.log('[Service Worker] Activating Service Worker ....', event);
//   event.waitUntil(
//     caches.keys()
//       .then(function(keyList) {
//         return Promise.all(keyList.map(function(key) {
//           if (key !== CACHE_STATIC_NAME && key !== CACHE_DYNAMIC_NAME) {
//             console.log('[Service Worker] Removing old cache.', key);
//             return caches.delete(key);
//           }
//         }));
//       })
//   );
//   return self.clients.claim();
// });

// // Providing an offline fallback page
// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     caches.match(event.request)
//       .then(function(response) {
//         if (response) {
//           return response;
//         } else {
//           return fetch(event.request)
//             .then(function(res) {
//               return caches.open(CACHE_DYNAMIC_NAME)
//                 .then(function(cache) {
//                   cache.put(event.request.url, res.clone());
//                   return res;
//                 })
//             })
//             .catch(function(err) {
//               return caches.open(CACHE_STATIC_NAME)
//                 .then(function(cache) {
//                   return cache.match('/offline.html');
//                 });
//             });
//         }
//       })
//   );
// });

// // Cache then Network Strategy
// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     caches.open(CACHE_DYNAMIC_NAME)
//       .then(function(cache) {
//         return fetch(event.request)
//           .then(function(res) {
//             cache.put(event.request, res.clone());
//             return res;
//           });
//       })
//   );
// });






// self.addEventListener('activate', function(event) {
//   console.log('[Service Worker] Activating Service Worker ....', event);
//   event.waitUntil(
//     caches.keys()
//       .then(function(keyList) {
//         return Promise.all(keyList.map(function(key) {
//           if (key !== CACHE_STATIC_NAME && key !== CACHE_DYNAMIC_NAME) {
//             console.log('[Service Worker] Removing old cache.', key);
//             return caches.delete(key);
//           }
//         }));
//       })
//   );
//   return self.clients.claim();
// });

// //Cache then network strategy
// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     event.respondWith(
//     caches.open(CACHE_DYNAMIC_NAME)
//       .then(function(cache) {
//         return fetch(event.request)
//           .then(function(res) {
//             cache.put(event.request, res.clone());
//             return res;
//           });
//       })
//   );
// });

// // network with cache fallback
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



// self.addEventListener('install', event => {
//  event.waitUntil(
//    caches.open($CACHE_STORE)
//      .then(function (cache) {
//        cache.addAll($FILES_ADDITIONAL);
//        return cache.addAll($FILES_IMPORTANT);
//      })
//      .then(() => {
//        return self.skipWaiting();
//      })
//  );
// });

// self.addEventListener('activate', event => {
//   event.waitUntil(
//     caches.open($CACHE_STORE)
//       .then(cache => {
//         return cache.keys()
//           .then(cacheNames => {
//             return Promise.all(
//               cacheNames.filter(cacheName => {
//                 return $FILES.indexOf(cacheName) === -1;
//               }).map(cacheName => {
//                 return caches.delete(cacheName);
//               })
//             );
//           })
//           .then(() => {
//             return self.clients.claim();
//           });
//       })
//   );
// }); 

// self.addEventListener('fetch', event => {
//   if (event.request.method === 'GET') {
//     let url = event.request.url.indexOf(self.location.origin) !== -1 ?
//       event.request.url.split(`${self.location.origin}/`)[1] :
//       event.request.url;
//     let isFileCached = $FILES.indexOf(url) !== -1;

//     if(!isFileCached && event.request.mode === 'navigate' && $NAVIGATION_FALLBACK){
//      url = $NAVIGATION_FALLBACK;
//      isFileCached = $FILES.indexOf(url) !== -1;
//     }

//     if (isFileCached) {
//       event.respondWith(
//         caches.open($CACHE_STORE)
//           .then(cache => {
//             return cache.match(url)
//               .then(response => {
//                 if (response) {
//                   return response;
//                 }
//                 throw Error('There is not response for such request', url);
//               });
//           })
//           .catch(error => {
//             return fetch(event.request);
//           })
//       );
//     }
//   }
// });