FROM cfssl/cfssl:latest

#RUN cfssl print-defaults config > ca-config.json && cfssl print-defaults csr > ca-csr.json \  
#&& cfssl genkey -initca ca-csr.json | cfssljson -bare ca

COPY src/ca.pem ca.pem
COPY src/ca-key.pem ca-key.pem

EXPOSE 8888

#RUN sleep 1000000

ENTRYPOINT ["cfssl"]

CMD ["serve","-ca=ca.pem","-ca-key=ca-key.pem","-address=0.0.0.0"]