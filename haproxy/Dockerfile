FROM haproxy:latest

COPY consul-template /tmp

VOLUME /tmp/haproxy.ctmpl

RUN export PATH="/tmp:$PATH"

RUN consul-template -consul-addr "localhost:8500" -template "/tmp/haproxy.ctmpl:/tmp/haproxy.cfg:service restart haproxy" &
