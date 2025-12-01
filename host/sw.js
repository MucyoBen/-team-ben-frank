const CACHE_NAME = "find-device-cache-v1";
const urlsToCache = [
    "/",               // homepage
    "/home.html",
    "/form.html",
    "/ability.html",
    "/manifest.json",
    "/style.css",      // niba ufite external CSS
    "/script.js",      // niba ufite external JS
    "/favicon.ico",    // icon
    "/icons/icon-192.png", 
    "/icons/icon-512.png"
];

// Install event: cache pages
self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                console.log("Caching app pages...");
                return cache.addAll(urlsToCache);
            })
    );
});

// Activate event: clean old caches
self.addEventListener("activate", event => {
    event.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(
                keys.filter(key => key !== CACHE_NAME)
                    .map(key => caches.delete(key))
            );
        })
    );
});

// Fetch event: serve cached content if offline
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        })
    );
});
