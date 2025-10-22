FROM ubuntu/bind9
LABEL authors="M.Martinez"

COPY web.bbq.fwd /var/lib/bind/web.bbq.fwd
COPY named.conf.internal-zone /etc/bind/
RUN echo 'include "/etc/bind/named.conf.internal-zone";'  >> /etc/bind/named.conf
