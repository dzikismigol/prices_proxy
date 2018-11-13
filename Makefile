build: compile-protobuf
	go build -o bin/server ./...

run:


compile-protobuf:
	protoc --go_out=plugins=grpc:. pricesproxy/*.proto
	protoc --php_out=php/src --grpc_out=php/src --plugin=protoc-gen-grpc=/home/mmarkiewicz/grpc/bins/opt/grpc_php_plugin pricesproxy/*.proto
