FROM elasticsearch:7.16.3
COPY elasticsearch.yml /usr/share/elasticsearch/config
COPY jvm.options /usr/share/elasticsearch/config
RUN bin/elasticsearch-plugin install analysis-phonetic && bin/elasticsearch-plugin install analysis-icu
EXPOSE 9200
EXPOSE 9300
CMD ["bin/elasticsearch"]