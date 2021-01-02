//https://www.npmjs.com/package/react-native-network-info
//https://www.npmjs.com/package/react-native-device-info
import React, { Component } from 'react';
import init from 'react_native_mqtt';
import AsyncStorage from '@react-native-community/async-storage';

import DeviceInfo from 'react-native-device-info';
import { NetworkInfo } from 'react-native-network-info';

import
{
  StyleSheet,
  Text,
  View,
  TextInput,
  Button,
  Alert
 } from 'react-native';

init
 ({
  size: 10000,
  storageBackend: AsyncStorage,
  defaultExpires: 1000 * 3600 * 24,
  enableCache: true,
  sync: {},
 });

NetworkInfo.getBSSID(bssid => {
  console.log(bssid);
});

export default class App extends Component {
  constructor()
  {
    super();
    this.state =
    {
      info:'',
    };
  }

  buttonInfor = () =>
  {
    NetworkInfo.getIPAddress().then(ipAddress => {
      console.log('IPv6: '+ipAddress); // fe80::878:8ff:fe18:6b5c %p2p0
    });
      console.log(NetworkInfo);
    DeviceInfo.getIpAddress().then(ip => {
      console.log('IPv4: '+ip); // 192.168.1.3
    });
    DeviceInfo.getMacAddress().then(mac => {
      console.log('mac: '+mac); // 08:78:08:18:6B:5C
    });
    DeviceInfo.getTotalMemory().then(totalMemory => {
      console.log('totalMemory: '+totalMemory); // 2951766016 bytes ~ 2.95GB
    });

    let systemName = DeviceInfo.getSystemName(); // Android
    let systemVersion = DeviceInfo.getSystemVersion(); // 8.1.0

    console.log('systemVersion: '+systemVersion);
    console.log(DeviceInfo);
  }

  render() {
    return (
      <View style={styles.container}>


        <Button onPress={this.buttonInfor} title="buttonInfor" />


      </View>
    );
  }


}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },

});
