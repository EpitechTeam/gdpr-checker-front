FROM node:lts-alpine

RUN npm install -g http-server serve

WORKDIR /app

RUN npm install

COPY . .

EXPOSE 80

CMD ls && serve -s dist -l 80