import {
  Modal
} from "./modals";

export default () => {
  const modal = new Modal({
    isOpen: (modal) => {},
    isClose: (modal) => {},
  });
  
  window.letai.modal = modal;
};