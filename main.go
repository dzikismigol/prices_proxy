package main

import (
	pb "github.com/dzikismigol/prices_proxy/pricesproxy"
	"github.com/dzikismigol/prices_proxy/server"
	"google.golang.org/grpc"
	"google.golang.org/grpc/reflection"
	"log"
	"net"
)

func main() {
	lis, err := net.Listen("tcp", "0.0.0.0:10080")
	if err != nil {
		log.Fatal("failed to bind to port", err)
	}

	s := grpc.NewServer()
	pb.RegisterProductPricesServer(s, &server.PricesServer{})
	reflection.Register(s)

	if err := s.Serve(lis); err != nil {
		log.Fatal("failed to serve", err)
	}
}
