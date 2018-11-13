package server

import (
	"context"
)

import pb "github.com/dzikismigol/prices_proxy/pricesproxy"

type PricesServer struct{}

func (s *PricesServer) GetPrice(ctx context.Context, in *pb.ProductPricingContext) (*pb.ProductPricing, error) {
	currencies := []*pb.ProductPricing_Price{}
	currencies = append(currencies, &pb.ProductPricing_Price{Currency: "PLN", FinalPrice: 10, BasePrice: 20, BonusWalletFunds: 5})
	currencies = append(currencies, &pb.ProductPricing_Price{Currency: "PLN", FinalPrice: 16, BasePrice: 20, BonusWalletFunds: 3})

	return &pb.ProductPricing{Currencies: currencies}, nil
}


