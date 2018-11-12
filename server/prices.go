package server

import (
	"context"
	"google.golang.org/grpc"
	"google.golang.org/grpc/reflection"
	"log"
	"net"
)
import pb "github.com/dzikismigol/prices_proxy"

type server struct{}

func (s *server) GetPrice(ctx context.Context, in *pb.ProductPricingContext) (*pb.ProductPricing, error) {
	currencies := []*pb.ProductPricing_Price{}
	currencies = append(currencies, &pb.ProductPricing_Price{Currency: "PLN", FinalPrice: 10, BasePrice: 20, BonusWalletFunds: 5})
	currencies = append(currencies, &pb.ProductPricing_Price{Currency: "PLN", FinalPrice: 16, BasePrice: 20, BonusWalletFunds: 3})

	return &pb.ProductPricing{Currencies: currencies}, nil
}

func main() {
	lis, err := net.Listen("tcp", "10080")
	if err != nil {
		log.Fatal("failed to bind to port", err)
	}

	s := grpc.NewServer()
	pb.RegisterProductPricesServer(s, &server{})
	reflection.Register(s)

	if err := s.Serve(lis); err != nil {
		log.Fatal("failed to serve", err)
	}
}
