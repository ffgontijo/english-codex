FROM nginx:1.27-alpine

COPY nginx/default.conf /etc/nginx/conf.d/default.conf
COPY index.html robots.txt site.webmanifest /usr/share/nginx/html/
COPY assets /usr/share/nginx/html/assets
COPY css /usr/share/nginx/html/css
COPY js /usr/share/nginx/html/js
COPY data /usr/share/nginx/html/data
COPY docs /usr/share/nginx/html/docs

EXPOSE 80
