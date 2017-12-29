<?php
namespace Xin\Thrift\MicroService;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class AppProcessor {
  protected $handler_ = null;
  public function __construct($handler) {
    $this->handler_ = $handler;
  }

  public function process($input, $output) {
    $rseqid = 0;
    $fname = null;
    $mtype = 0;

    $input->readMessageBegin($fname, $mtype, $rseqid);
    $methodname = 'process_'.$fname;
    if (!method_exists($this, $methodname)) {
      $input->skip(TType::STRUCT);
      $input->readMessageEnd();
      $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
      $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
      $x->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
      return;
    }
    $this->$methodname($rseqid, $input, $output);
    return true;
  }

  protected function process_version($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Xin\Thrift\MicroService\App_version_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Xin\Thrift\MicroService\App_version_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Xin\Thrift\MicroService\App_version_result();
    try {
      $result->success = $this->handler_->version($args->options);
    } catch (\Xin\Thrift\ZipkinService\ThriftException $ex) {
      $result->ex = $ex;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'version', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('version', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_testException($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Xin\Thrift\MicroService\App_testException_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Xin\Thrift\MicroService\App_testException_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Xin\Thrift\MicroService\App_testException_result();
    try {
      $result->success = $this->handler_->testException($args->options);
    } catch (\Xin\Thrift\ZipkinService\ThriftException $ex) {
      $result->ex = $ex;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'testException', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('testException', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_welcome($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Xin\Thrift\MicroService\App_welcome_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Xin\Thrift\MicroService\App_welcome_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Xin\Thrift\MicroService\App_welcome_result();
    try {
      $result->success = $this->handler_->welcome($args->options);
    } catch (\Xin\Thrift\ZipkinService\ThriftException $ex) {
      $result->ex = $ex;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'welcome', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('welcome', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_timeout($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Xin\Thrift\MicroService\App_timeout_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Xin\Thrift\MicroService\App_timeout_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Xin\Thrift\MicroService\App_timeout_result();
    try {
      $result->success = $this->handler_->timeout($args->options);
    } catch (\Xin\Thrift\ZipkinService\ThriftException $ex) {
      $result->ex = $ex;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'timeout', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('timeout', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
