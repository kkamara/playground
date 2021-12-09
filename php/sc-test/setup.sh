#docker rm $( docker ps -aq ) && \
cp .env.example .env && \
composer i && \
make dev && \
make backend-migrate && \
make backend-seed && \
^A^A^Avendor/bin/sail dusk
